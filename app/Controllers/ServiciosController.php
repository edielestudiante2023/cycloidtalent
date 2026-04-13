<?php

namespace App\Controllers;

class ServiciosController extends BaseController
{
    public function consultoriaSst()
    {
        $url = base_url('servicios/consultoria-sst');
        $title = 'Consultoría en SST Colombia | Implementación SG-SST';
        $desc  = 'Consultoría en SST y Seguridad y Salud en el Trabajo en Colombia. Diseñamos, implementamos y mantenemos tu SG-SST según Decreto 1072 y Resolución 0312. Consultoría SST para empresas, propiedad horizontal y locales comerciales.';

        $faqs = [
            ['q' => '¿Qué es la consultoría en SST y por qué es obligatoria en Colombia?', 'a' => 'La consultoría en Seguridad y Salud en el Trabajo (SST) es el servicio profesional que ayuda a las empresas a diseñar e implementar un Sistema de Gestión SG-SST conforme al Decreto 1072 de 2015. Es obligatoria para TODAS las empresas en Colombia, sin importar su tamaño o sector, y su incumplimiento puede generar multas de hasta 500 SMMLV.'],
            ['q' => '¿Cuánto cuesta una consultoría SST en Colombia?', 'a' => 'El costo de la consultoría en SST depende del tamaño de la empresa, la cantidad de trabajadores, la complejidad de los procesos y el nivel de riesgo. En Cycloid Talent ofrecemos planes adaptados desde micro empresas hasta medianas y grandes empresas. Solicita una cotización gratuita sin compromiso.'],
            ['q' => '¿Qué diferencia hay entre la ARL y una consultoría SST externa?', 'a' => 'La ARL ofrece asesoría básica incluida en la cotización, pero no implementa el SG-SST por ti. Una consultoría SST externa como Cycloid Talent diseña, implementa, documenta y da seguimiento integral a tu Sistema de Gestión, garantizando el cumplimiento normativo completo.'],
            ['q' => '¿Cuánto tiempo toma implementar el SG-SST?', 'a' => 'La implementación del SG-SST toma entre 3 y 6 meses dependiendo del tamaño de la empresa y su madurez previa en SST. El mantenimiento es continuo: el SG-SST requiere actualizaciones anuales y auditorías periódicas para mantenerse vigente.'],
            ['q' => '¿A quién va dirigida esta consultoría en SST?', 'a' => 'Nuestra consultoría SST está dirigida a empresas de cualquier tamaño en Colombia: pymes, grandes empresas, propiedad horizontal (conjuntos residenciales y edificios), locales comerciales, contratistas y proveedores que deben cumplir con los estándares mínimos del Ministerio del Trabajo.'],
            ['q' => '¿Qué pasa si no cumplo con el SG-SST?', 'a' => 'El incumplimiento del SG-SST genera sanciones económicas de hasta 500 salarios mínimos legales mensuales vigentes (SMMLV), clausura del establecimiento y responsabilidad legal del empleador ante accidentes o enfermedades laborales de los trabajadores.'],
        ];

        return view('servicios/consultoria-sst', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], ['Consultoría en SST', $url]]),
                seo_faq_jsonld($faqs),
            ]),
        ]);
    }

    public function riesgoPsicosocial()
    {
        $url = base_url('servicios/riesgo-psicosocial');
        $title = 'Batería de Riesgo Psicosocial Colombia | Evaluación RPS';
        $desc  = 'Evaluación de Batería de Riesgo Psicosocial en Colombia con instrumentos del Ministerio del Trabajo. Aplicación, medición y plan de intervención según Resolución 2646 de 2008 y 2764 de 2022. RPS empresarial para empresas, propiedad horizontal y sector servicios.';

        $galeriaModel = new \App\Models\GaleriaServicioModel();

        $faqs = [
            ['q' => '¿Qué es la Batería de Riesgo Psicosocial?', 'a' => 'La Batería de Riesgo Psicosocial es el conjunto de instrumentos validados por el Ministerio del Trabajo de Colombia para identificar, evaluar y monitorear los factores de riesgo psicosocial intralaborales, extralaborales y de estrés. Incluye cuestionarios diferenciados por nivel de cargo (Forma A para jefes y profesionales, Forma B para operativos), ficha de datos generales y cuestionario de estrés.'],
            ['q' => '¿Es obligatoria la evaluación de riesgo psicosocial en Colombia?', 'a' => 'Sí, la evaluación de riesgo psicosocial es obligatoria en Colombia para todas las empresas según la Resolución 2646 de 2008 del Ministerio del Trabajo. Además, la Resolución 2764 de 2022 actualizó los lineamientos y obliga a repetir la batería cada dos años o cuando haya cambios organizacionales significativos.'],
            ['q' => '¿Quién puede aplicar la Batería de Riesgo Psicosocial?', 'a' => 'Solo un psicólogo con licencia vigente en Seguridad y Salud en el Trabajo (SST) emitida por la Secretaría de Salud puede aplicar, analizar e interpretar la Batería de Riesgo Psicosocial. En Cycloid Talent contamos con psicólogos licenciados con experiencia en evaluación RPS empresarial.'],
            ['q' => '¿Cuánto cuesta la evaluación de Batería de Riesgo Psicosocial?', 'a' => 'El costo depende del número de trabajadores, la distribución por cargos, el tipo de aplicación (presencial o virtual) y el alcance del informe. Solicita una cotización personalizada según el tamaño y sector de tu empresa.'],
            ['q' => '¿Cada cuánto se debe aplicar la Batería de Riesgo Psicosocial?', 'a' => 'La Batería de Riesgo Psicosocial debe aplicarse al menos cada dos años según la normativa vigente. También es obligatorio repetirla cuando hay cambios organizacionales significativos como fusiones, reestructuraciones, cambios de turnos o aumento importante del personal.'],
            ['q' => '¿Qué incluye el informe de Riesgo Psicosocial?', 'a' => 'Nuestro informe de Riesgo Psicosocial incluye: resultados estadísticos por dominio y dimensión, identificación de niveles de riesgo por área y cargo, análisis cualitativo, recomendaciones priorizadas, plan de intervención a 12 meses, informe ejecutivo para la gerencia, informe técnico completo y certificado firmado por psicólogo con licencia SST.'],
        ];

        return view('servicios/riesgo-psicosocial', [
            'title'       => $title,
            'description' => $desc,
            'canonical'   => $url,
            'galeria'     => $galeriaModel->getPorServicio('riesgo-psicosocial'),
            'faqs'        => $faqs,
            'jsonld'      => seo_graph_jsonld([
                seo_service_jsonld($title, $desc, $url),
                seo_breadcrumb_jsonld([['Inicio', base_url('/')], ['Batería de Riesgo Psicosocial', $url]]),
                seo_faq_jsonld($faqs),
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
