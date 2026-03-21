<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto/index', [
            'title'       => 'Contacto',
            'description' => 'Contáctanos para una asesoría en SST, Riesgo Psicosocial o cualquiera de nuestros servicios.',
        ]);
    }

    public function enviar()
    {
        $rules = [
            'nombre'   => 'required|min_length[2]',
            'empresa'  => 'required|min_length[2]',
            'telefono' => 'required|min_length[7]',
            'servicio' => 'required',
            'mensaje'  => 'required|min_length[10]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $nombre   = $this->request->getPost('nombre');
        $empresa  = $this->request->getPost('empresa');
        $telefono = $this->request->getPost('telefono');
        $servicio = $this->request->getPost('servicio');
        $mensaje  = $this->request->getPost('mensaje');

        $apiKey = env('SENDGRID_API_KEY');
        $body   = json_encode([
            'personalizations' => [[
                'to'      => [['email' => 'diana.cuestas@cycloidtalent.com']],
                'subject' => "Nuevo contacto web — {$nombre} ({$empresa})",
            ]],
            'from'    => ['email' => 'noreply@cycloidtalent.com', 'name' => 'Cycloid Talent Web'],
            'content' => [[
                'type'  => 'text/html',
                'value' => "
                    <h2>Nuevo mensaje desde cycloidtalent.com</h2>
                    <p><strong>Nombre:</strong> {$nombre}</p>
                    <p><strong>Empresa:</strong> {$empresa}</p>
                    <p><strong>Teléfono:</strong> {$telefono}</p>
                    <p><strong>Servicio de interés:</strong> {$servicio}</p>
                    <p><strong>Mensaje:</strong><br>{$mensaje}</p>
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
        $response   = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpStatus === 202) {
            return redirect()->to(base_url('contacto'))->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
        }

        return redirect()->back()->withInput()->with('error', 'Hubo un problema al enviar el mensaje. Por favor inténtalo de nuevo.');
    }
}
