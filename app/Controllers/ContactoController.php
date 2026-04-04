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

        $nombre   = $this->request->getPost('nombre');
        $email    = $this->request->getPost('email');
        $empresa  = $this->request->getPost('empresa');
        $telefono = $this->request->getPost('telefono');
        $servicio = $this->request->getPost('servicio');
        $mensaje  = $this->request->getPost('mensaje');

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
                'from'    => ['email' => 'noreply@cycloidtalent.com', 'name' => 'Cycloid Talent Web'],
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
