<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'       => 'Inicio',
            'description' => 'Cycloid Talent — Consultoría SST, Riesgo Psicosocial y Seguridad Laboral en Colombia.',
        ];
        return view('home/index', $data);
    }

    public function clientes()
    {
        $data = [
            'title'       => 'Nuestros Clientes',
            'description' => 'Empresas que confían en Cycloid Talent para su gestión SST.',
        ];
        return view('clientes/index', $data);
    }
}
