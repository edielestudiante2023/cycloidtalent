<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactoModel;
use App\Models\UsuarioModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $contactoModel = new ContactoModel();
        $usuarioModel  = new UsuarioModel();

        return view('admin/dashboard', [
            'totalMensajes'   => $contactoModel->countAll(),
            'mensajesNoLeidos' => $contactoModel->where('leido', 0)->countAllResults(),
            'totalUsuarios'   => $usuarioModel->countAll(),
        ]);
    }
}
