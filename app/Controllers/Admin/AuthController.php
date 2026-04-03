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
}
