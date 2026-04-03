<?php

namespace App\Controllers;

class ServiciosController extends BaseController
{
    public function consultoriaSst()
    {
        $url = base_url('servicios/consultoria-sst');
        $title = 'Consultoría SG-SST';
        $desc  = 'Consultoría SG-SST en Colombia. Implementamos tu Sistema de Gestión de Seguridad y Salud en el Trabajo según Decreto 1072 y Resolución 0312.';

        return view('servicios/consultoria-sst', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], [$title, $url]]),
            ]),
        ]);
    }

    public function riesgoPsicosocial()
    {
        $url = base_url('servicios/riesgo-psicosocial');
        $title = 'Batería de Riesgo Psicosocial';
        $desc  = 'Batería de Riesgo Psicosocial en Colombia. Evaluación con instrumentos del Ministerio del Trabajo según Resolución 2646 de 2008 y 2764 de 2022.';

        return view('servicios/riesgo-psicosocial', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], [$title, $url]]),
            ]),
        ]);
    }

    public function propiedadHorizontal()
    {
        $url = base_url('servicios/propiedad-horizontal');
        $title = 'SST en Propiedad Horizontal';
        $desc  = 'Gestión SST especializada para conjuntos residenciales y edificios de propiedad horizontal en Colombia.';

        return view('servicios/propiedad-horizontal', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], [$title, $url]]),
            ]),
        ]);
    }

    public function brigadaEmergencia()
    {
        $url = base_url('servicios/brigada-emergencia');
        $title = 'Brigada de Emergencia';
        $desc  = 'Formación y entrenamiento de brigadas de emergencia para tu empresa en Colombia según normativa SST.';

        return view('servicios/brigada-emergencia', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], [$title, $url]]),
            ]),
        ]);
    }

    public function auditoriaProveedores()
    {
        $url = base_url('servicios/auditoria-proveedores');
        $title = 'Auditoría SG-SST a Proveedores';
        $desc  = 'Evaluación y auditoría del Sistema de Gestión SST de tus proveedores y contratistas en Colombia.';

        return view('servicios/auditoria-proveedores', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], [$title, $url]]),
            ]),
        ]);
    }

    public function vigilaSst()
    {
        $url = base_url('servicios/vigia-sst');
        $title = 'Vigía SST';
        $desc  = 'Servicio de Vigía SST para empresas con menos de 10 trabajadores en Colombia.';

        return view('servicios/vigia-sst', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], [$title, $url]]),
            ]),
        ]);
    }
}
