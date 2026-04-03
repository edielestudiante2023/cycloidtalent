<?php

namespace App\Controllers;

class NosotrosController extends BaseController
{
    public function index()
    {
        $data = [
            'title'       => 'Nosotros',
            'description' => 'Conoce al equipo de Cycloid Talent, empresa de consultoría SST en Colombia. Misión, visión y principios.',
            'canonical'   => base_url('nosotros'),
        ];
        return view('nosotros/index', $data);
    }
}
