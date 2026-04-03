<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title'       => 'Inicio',
            'description' => 'Cycloid Talent — Consultoría especializada en Seguridad y Salud en el Trabajo y gestión del riesgo psicosocial para empresas colombianas.',
            'canonical'   => base_url('/'),
            'jsonld'      => seo_organization_jsonld(),
        ];
        return view('home/index', $data);
    }

    public function clientes()
    {
        $data = [
            'title'       => 'Nuestros Clientes',
            'description' => 'Empresas que confían en Cycloid Talent para su gestión en Seguridad y Salud en el Trabajo en Colombia.',
            'canonical'   => base_url('clientes'),
        ];
        return view('clientes/index', $data);
    }
}
