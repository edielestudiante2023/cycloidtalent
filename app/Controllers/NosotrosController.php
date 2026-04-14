<?php

namespace App\Controllers;

class NosotrosController extends BaseController
{
    public function index()
    {
        $data = [
            'title'       => 'Nosotros | Cycloid Talent — Consultora SST en Colombia',
            'description' => 'Conoce a Cycloid Talent S.A.S., consultora especializada en Seguridad y Salud en el Trabajo y Batería de Riesgo Psicosocial en Colombia. Nuestra misión, visión, principios, valores y equipo de expertos en SG-SST.',
            'canonical'   => base_url('nosotros'),
            'jsonld'      => seo_graph_jsonld([
                seo_organization_jsonld(),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], ['Nosotros', base_url('nosotros')]]),
            ]),
        ];
        return view('nosotros/index', $data);
    }
}
