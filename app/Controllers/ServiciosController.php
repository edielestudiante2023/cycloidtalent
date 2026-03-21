<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ServiciosController extends Controller
{
    public function consultoriaSst()
    {
        return view('servicios/consultoria-sst', [
            'title'       => 'Consultoría SG-SST',
            'description' => 'Implementamos y mantenemos tu Sistema de Gestión de Seguridad y Salud en el Trabajo.',
        ]);
    }

    public function riesgoPsicosocial()
    {
        return view('servicios/riesgo-psicosocial', [
            'title'       => 'Evaluación de Riesgo Psicosocial',
            'description' => 'Evaluación y gestión del riesgo psicosocial laboral según la Resolución 2646 de 2008.',
        ]);
    }

    public function propiedadHorizontal()
    {
        return view('servicios/propiedad-horizontal', [
            'title'       => 'SST en Propiedad Horizontal',
            'description' => 'Gestión SST especializada para conjuntos residenciales y edificios de propiedad horizontal.',
        ]);
    }

    public function brigadaEmergencia()
    {
        return view('servicios/brigada-emergencia', [
            'title'       => 'Brigada de Emergencia',
            'description' => 'Formación y entrenamiento de brigadas de emergencia para tu empresa.',
        ]);
    }

    public function auditoriaProveedores()
    {
        return view('servicios/auditoria-proveedores', [
            'title'       => 'Auditoría SG-SST a Proveedores',
            'description' => 'Evaluación y auditoría del Sistema de Gestión SST de tus proveedores y contratistas.',
        ]);
    }

    public function vigilaSst()
    {
        return view('servicios/vigia-sst', [
            'title'       => 'Vigía SST',
            'description' => 'Servicio de Vigía SST para empresas con menos de 10 trabajadores.',
        ]);
    }
}
