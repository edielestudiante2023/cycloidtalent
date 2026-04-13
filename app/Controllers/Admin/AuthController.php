<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class AuthController extends BaseController
{
    public function login()
    {
        if (session()->get('usuario_id')) {
            return redirect()->to(base_url('admin'));
        }

        return view('admin/auth/login', [
            'error' => session()->getFlashdata('error'),
        ]);
    }

    public function attemptLogin()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->first();

        if (! $usuario || ! password_verify($password, $usuario['password'])) {
            return redirect()->back()->with('error', 'Email o contraseña incorrectos.');
        }

        if (! $usuario['activo']) {
            return redirect()->back()->with('error', 'Tu cuenta está desactivada.');
        }

        // Guardar sesión
        session()->set([
            'usuario_id'     => $usuario['id'],
            'usuario_nombre' => $usuario['nombre'],
            'usuario_email'  => $usuario['email'],
            'usuario_rol_id' => $usuario['rol_id'],
        ]);

        // Actualizar último login
        $usuarioModel->update($usuario['id'], ['ultimo_login' => date('Y-m-d H:i:s')]);

        return redirect()->to(base_url('admin'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('admin/login'));
    }

    public function forgot()
    {
        if (session()->get('usuario_id')) {
            return redirect()->to(base_url('admin'));
        }

        return view('admin/auth/forgot', [
            'error'   => session()->getFlashdata('error'),
            'success' => session()->getFlashdata('success'),
        ]);
    }

    public function sendReset()
    {
        $email = $this->request->getPost('email');

        if (! $email) {
            return redirect()->back()->with('error', 'Por favor ingresa tu email.');
        }

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->first();

        // Mensaje genérico: no revelar si el email existe o no
        $mensajeGenerico = 'Si el email existe en nuestro sistema, recibirás un enlace de recuperación en unos minutos.';

        if (! $usuario || ! $usuario['activo']) {
            return redirect()->to(base_url('admin/forgot'))->with('success', $mensajeGenerico);
        }

        // Generar token y guardar
        $token = bin2hex(random_bytes(32));
        $expires = date('Y-m-d H:i:s', time() + 3600); // 1 hora

        $usuarioModel->update($usuario['id'], [
            'reset_token'         => $token,
            'reset_token_expires' => $expires,
        ]);

        // Enviar email por SendGrid
        $this->enviarEmailRecuperacion($usuario['email'], $usuario['nombre'], $token);

        return redirect()->to(base_url('admin/forgot'))->with('success', $mensajeGenerico);
    }

    public function reset(string $token)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('reset_token', $token)
                                ->where('reset_token_expires >=', date('Y-m-d H:i:s'))
                                ->first();

        if (! $usuario) {
            return redirect()->to(base_url('admin/forgot'))
                             ->with('error', 'El enlace de recuperación es inválido o ha expirado.');
        }

        return view('admin/auth/reset', [
            'token'   => $token,
            'error'   => session()->getFlashdata('error'),
        ]);
    }

    public function updatePassword(string $token)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('reset_token', $token)
                                ->where('reset_token_expires >=', date('Y-m-d H:i:s'))
                                ->first();

        if (! $usuario) {
            return redirect()->to(base_url('admin/forgot'))
                             ->with('error', 'El enlace de recuperación es inválido o ha expirado.');
        }

        $password  = $this->request->getPost('password');
        $password2 = $this->request->getPost('password_confirm');

        if (strlen((string) $password) < 8) {
            return redirect()->back()->with('error', 'La contraseña debe tener al menos 8 caracteres.');
        }

        if ($password !== $password2) {
            return redirect()->back()->with('error', 'Las contraseñas no coinciden.');
        }

        $usuarioModel->update($usuario['id'], [
            'password'            => password_hash($password, PASSWORD_BCRYPT),
            'reset_token'         => null,
            'reset_token_expires' => null,
        ]);

        return redirect()->to(base_url('admin/login'))
                         ->with('success', 'Tu contraseña ha sido actualizada. Ya puedes iniciar sesión.');
    }

    private function enviarEmailRecuperacion(string $email, string $nombre, string $token): void
    {
        $apiKey = env('SENDGRID_API_KEY');
        if (empty($apiKey)) {
            return;
        }

        $resetUrl = base_url('admin/reset/' . $token);

        $body = json_encode([
            'personalizations' => [[
                'to'      => [['email' => $email, 'name' => $nombre]],
                'subject' => 'Recuperación de contraseña — Cycloid Talent',
            ]],
            'from'    => ['email' => 'notificacion.cycloidtalent@cycloidtalent.com', 'name' => 'Cycloid Talent'],
            'content' => [[
                'type'  => 'text/html',
                'value' => "
                    <div style='font-family:Inter,Arial,sans-serif;max-width:600px;margin:0 auto;padding:2rem;'>
                        <h2 style='color:#0345BF;'>Recuperación de contraseña</h2>
                        <p>Hola " . esc($nombre) . ",</p>
                        <p>Recibimos una solicitud para restablecer la contraseña de tu cuenta en Cycloid Talent. Haz clic en el siguiente botón para crear una nueva contraseña:</p>
                        <p style='margin:2rem 0;'>
                            <a href='{$resetUrl}' style='background:#0345BF;color:#fff;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:600;'>Restablecer contraseña</a>
                        </p>
                        <p style='color:#666;font-size:0.9rem;'>Este enlace expira en 1 hora. Si no solicitaste este cambio, puedes ignorar este correo.</p>
                        <p style='color:#666;font-size:0.85rem;'>Si el botón no funciona, copia y pega este enlace en tu navegador:<br><a href='{$resetUrl}'>{$resetUrl}</a></p>
                    </div>
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
}
