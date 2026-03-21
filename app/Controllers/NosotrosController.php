<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class NosotrosController extends Controller
{
    public function index()
    {
        $data = [
            'title'       => 'Nosotros',
            'description' => 'Conoce al equipo de Cycloid Talent, nuestra misión, visión y principios.',
        ];
        return view('nosotros/index', $data);
    }
}
