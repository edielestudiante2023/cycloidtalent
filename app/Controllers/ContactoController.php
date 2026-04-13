<?php

namespace App\Controllers;

use App\Models\ContactoModel;

class ContactoController extends BaseController
{
    public function index()
    {
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate');
        $this->response->setHeader('Pragma', 'no-cache');

        return view('contacto/index', [
            'title'       => 'Contacto',
            'description' => 'Contáctanos para una asesoría en SST, Baterías de Riesgo Psicosocial o cualquiera de nuestros servicios en Colombia.',
            'canonical'   => base_url('contacto'),
        ]);
    }

    public function enviar()
    {
        // Anti-spam: honeypot (bots llenan este campo oculto)
        if (! empty($this->request->getPost('website'))) {
            log_message('warning', 'Contacto spam bloqueado (honeypot) IP: ' . $this->request->getIPAddress());
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        // Anti-spam: tiempo mínimo (bots envían en menos de 3 segundos)
        $ts = (int) $this->request->getPost('_ts');
        if ($ts > 0 && (time() - $ts) < 3) {
            log_message('warning', 'Contacto spam bloqueado (tiempo) IP: ' . $this->request->getIPAddress());
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        // Anti-spam: checkbox obligatorio
        if (! $this->request->getPost('humano')) {
            return redirect()->back()->withInput()->with('error', 'Debes confirmar que no eres un robot.');
        }

        $nombre  = (string) $this->request->getPost('nombre');
        $email   = (string) $this->request->getPost('email');
        $empresa = (string) $this->request->getPost('empresa');
        $mensaje = (string) $this->request->getPost('mensaje');

        // Anti-spam: caracteres no latinos (cirílico, chino, árabe, etc.)
        $textoCompleto = $nombre . ' ' . $empresa . ' ' . $mensaje;
        if (preg_match('/[\p{Cyrillic}\p{Han}\p{Arabic}\p{Hebrew}\p{Thai}\p{Greek}]/u', $textoCompleto)) {
            log_message('warning', 'Contacto spam bloqueado (caracteres no latinos) IP: ' . $this->request->getIPAddress() . ' | ' . $nombre . ' | ' . $email);
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        // Anti-spam: patrón bot (nombre === empresa)
        if (strcasecmp(trim($nombre), trim($empresa)) === 0) {
            log_message('warning', 'Contacto spam bloqueado (nombre=empresa) IP: ' . $this->request->getIPAddress() . ' | ' . $nombre . ' | ' . $email);
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        // Anti-spam: lista negra de nombres, emails y dominios
        $blacklist = [
            'nombres' => ['RobertBow', 'RobertBowen', 'MichaelBow', 'Jameslap', 'JamesLap'],
            'emails'  => ['cfknappe@msn.com'],
            'dominios_email' => [],
        ];

        $nombreLower = strtolower(trim($nombre));
        $emailLower  = strtolower(trim($email));
        $dominio     = substr(strrchr($emailLower, '@') ?: '', 1);

        foreach ($blacklist['nombres'] as $n) {
            if (stripos($nombreLower, strtolower($n)) !== false) {
                log_message('warning', 'Contacto spam bloqueado (blacklist nombre) IP: ' . $this->request->getIPAddress() . ' | ' . $nombre);
                return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
            }
        }

        if (in_array($emailLower, $blacklist['emails'], true)) {
            log_message('warning', 'Contacto spam bloqueado (blacklist email) IP: ' . $this->request->getIPAddress() . ' | ' . $email);
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        if ($dominio && in_array($dominio, $blacklist['dominios_email'], true)) {
            log_message('warning', 'Contacto spam bloqueado (blacklist dominio) IP: ' . $this->request->getIPAddress() . ' | ' . $email);
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        // Anti-spam: URLs en el mensaje (típico de spam)
        if (preg_match_all('/https?:\/\//i', $mensaje) >= 2) {
            log_message('warning', 'Contacto spam bloqueado (múltiples URLs) IP: ' . $this->request->getIPAddress() . ' | ' . $email);
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        $rules = [
            'nombre'   => 'required|min_length[2]',
            'email'    => 'required|valid_email',
            'empresa'  => 'required|min_length[2]',
            'telefono' => 'required|min_length[7]',
            'servicio' => 'required',
            'mensaje'  => 'permit_empty',
        ];

        if (! $this->validate($rules)) {
            log_message('error', 'Contacto validación falló: ' . json_encode($this->validator->getErrors()));
            log_message('error', 'Contacto POST data: ' . json_encode($this->request->getPost()));
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $telefono = $this->request->getPost('telefono');
        $servicio = $this->request->getPost('servicio');
        $mensaje  = $mensaje ?: '';

        // 1) Guardar en base de datos (siempre)
        $contactoModel = new ContactoModel();
        $guardado = $contactoModel->insert([
            'nombre'     => $nombre,
            'email'      => $email,
            'telefono'   => $telefono,
            'empresa'    => $empresa,
            'asunto'     => $servicio,
            'mensaje'    => $mensaje,
            'ip_address' => $this->request->getIPAddress(),
        ]);

        if (! $guardado) {
            return redirect()->back()->withInput()->with('error', 'Hubo un problema al guardar el mensaje. Por favor inténtalo de nuevo.');
        }

        // 2) Intentar enviar email por SendGrid (complemento)
        $apiKey = env('SENDGRID_API_KEY');
        if (! empty($apiKey)) {
            $body = json_encode([
                'personalizations' => [[
                    'to'      => [['email' => 'diana.cuestas@cycloidtalent.com']],
                    'cc'      => [['email' => 'edison.cuervo@cycloidtalent.com']],
                    'subject' => "Nuevo contacto web — {$nombre} ({$empresa})",
                ]],
                'from'    => ['email' => 'notificacion.cycloidtalent@cycloidtalent.com', 'name' => 'Cycloid Talent Web'],
                'reply_to' => ['email' => $email, 'name' => $nombre],
                'content' => [[
                    'type'  => 'text/html',
                    'value' => "
                        <h2>Nuevo mensaje desde cycloidtalent.com</h2>
                        <p><strong>Nombre:</strong> " . esc($nombre) . "</p>
                        <p><strong>Email:</strong> " . esc($email) . "</p>
                        <p><strong>Empresa:</strong> " . esc($empresa) . "</p>
                        <p><strong>Teléfono:</strong> " . esc($telefono) . "</p>
                        <p><strong>Servicio de interés:</strong> " . esc($servicio) . "</p>
                        <p><strong>Mensaje:</strong><br>" . nl2br(esc($mensaje)) . "</p>
                    ",
                ]],
            ]);

            $ch = curl_init('https://api.sendgrid.com/v3/mail/send');
            curl_setopt_array($ch, [
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $body,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => [
                    "Authorization: Bearer {$apiKey}",
                    'Content-Type: application/json',
                ],
            ]);
            curl_exec($ch);
            curl_close($ch);
        }

        return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
    }
}
