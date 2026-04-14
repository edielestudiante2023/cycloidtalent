<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $faqs = [
            ['q' => '¿Qué servicios de SST ofrece Cycloid Talent?', 'a' => 'Cycloid Talent es una consultora especializada en Seguridad y Salud en el Trabajo en Colombia. Ofrecemos tres servicios principales: Consultoría SG-SST (diseño e implementación del Sistema de Gestión conforme al Decreto 1072), Batería de Riesgo Psicosocial (evaluación con instrumentos oficiales del Ministerio del Trabajo) y SST en Propiedad Horizontal (SG-SST adaptado a conjuntos residenciales y edificios).'],
            ['q' => '¿Es obligatorio tener SG-SST en Colombia?', 'a' => 'Sí. Todas las empresas en Colombia, sin importar su tamaño o sector, deben implementar el Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST) según el Decreto 1072 de 2015 y la Resolución 0312 de 2019. El incumplimiento puede generar multas del Ministerio del Trabajo de hasta 500 SMMLV.'],
            ['q' => '¿A quién va dirigida la consultoría en SST de Cycloid Talent?', 'a' => 'Atendemos empresas de todos los tamaños en Colombia: pymes, grandes empresas, propiedad horizontal (conjuntos residenciales y edificios de oficinas), locales comerciales, contratistas y proveedores que deben cumplir con los estándares mínimos del Ministerio del Trabajo.'],
            ['q' => '¿Qué es la Batería de Riesgo Psicosocial y por qué es obligatoria?', 'a' => 'La Batería de Riesgo Psicosocial es el conjunto de instrumentos validados por el Ministerio del Trabajo para evaluar los factores de riesgo psicosocial laboral. Es obligatoria según la Resolución 2646 de 2008 y la Resolución 2764 de 2022, y debe aplicarse al menos cada dos años por un psicólogo con licencia en SST.'],
            ['q' => '¿Dónde está ubicada Cycloid Talent?', 'a' => 'Cycloid Talent S.A.S. está ubicada en Soacha, Cundinamarca (Tv. 24B #17-209, Conjunto Residencial Sandalo, Oficina 202). Atendemos empresas en toda Colombia con servicios presenciales y virtuales.'],
        ];

        $data = [
            'title'       => 'Consultoría SST Colombia | SG-SST y Riesgo Psicosocial',
            'description' => 'Cycloid Talent — Consultoría especializada en Seguridad y Salud en el Trabajo (SST) y Batería de Riesgo Psicosocial en Colombia. Implementación del SG-SST para empresas, propiedad horizontal y locales comerciales según Decreto 1072 y Resolución 2646.',
            'canonical'   => base_url('/'),
            'jsonld'      => seo_graph_jsonld([
                seo_organization_jsonld(),
                seo_faq_jsonld($faqs),
            ]),
            'faqs'        => $faqs,
        ];
        return view('home/index', $data);
    }

    public function clientes()
    {
        $data = [
            'title'       => 'Nuestros Clientes | Consultoría SST Colombia — Cycloid Talent',
            'description' => 'Más de 50 clientes en Colombia confían en la consultoría SST de Cycloid Talent. Empresas de servicios, propiedad horizontal, financiero, administrativo, comercializadores y mipymes que cumplen el SG-SST con nosotros.',
            'canonical'   => base_url('clientes'),
            'jsonld'      => seo_graph_jsonld([
                seo_organization_jsonld(),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], ['Clientes', base_url('clientes')]]),
            ]),
        ];
        return view('clientes/index', $data);
    }
}
