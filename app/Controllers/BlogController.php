<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class BlogController extends Controller
{
    // Índice de artículos — agregar nuevos aquí
    private array $articulos = [
        [
            'slug'    => 'riesgo-psicosocial-que-es',
            'titulo'  => '¿Qué es el Riesgo Psicosocial Laboral?',
            'fecha'   => '2023-01-13',
            'imagen'  => 'assets/img/blog/riesgo-psicosocial.png',
            'extracto'=> 'Los factores de riesgo psicosocial afectan la salud mental y física de los trabajadores. Conoce cómo identificarlos y gestionarlos.',
        ],
        [
            'slug'    => 'sg-sst-que-es',
            'titulo'  => '¿Qué es el SG-SST y por qué es obligatorio?',
            'fecha'   => '2023-05-13',
            'imagen'  => 'assets/img/blog/sg-sst.jpg',
            'extracto'=> 'El Sistema de Gestión de Seguridad y Salud en el Trabajo es obligatorio para todas las empresas en Colombia según el Decreto 1072 de 2015.',
        ],
        [
            'slug'    => 'brigada-emergencia-importancia',
            'titulo'  => 'La importancia de tener una Brigada de Emergencia',
            'fecha'   => '2023-09-01',
            'imagen'  => 'assets/img/blog/brigada.jpg',
            'extracto'=> 'Una brigada de emergencia bien entrenada puede salvar vidas. Aprende cómo conformar la tuya según la normativa colombiana.',
        ],
        [
            'slug'    => 'auditoria-proveedores-sst',
            'titulo'  => 'Por qué auditar el SST de tus proveedores',
            'fecha'   => '2023-10-13',
            'imagen'  => 'assets/img/blog/auditoria.png',
            'extracto'=> 'La responsabilidad SST se extiende a tu cadena de suministro. Descubre el checklist de 28 ítems que usamos en nuestras auditorías.',
        ],
        [
            'slug'    => 'vigia-sst-obligaciones',
            'titulo'  => '¿Qué hace el Vigía SST en una empresa?',
            'fecha'   => '2024-01-10',
            'imagen'  => 'assets/img/blog/vigia.jpg',
            'extracto'=> 'El Vigía SST es obligatorio para empresas con menos de 10 trabajadores. Conoce sus funciones y cómo nombrarlo correctamente.',
        ],
        [
            'slug'    => 'propiedad-horizontal-sst',
            'titulo'  => 'SST en Propiedad Horizontal: lo que debes saber',
            'fecha'   => '2024-06-11',
            'imagen'  => 'assets/img/blog/propiedad-horizontal.png',
            'extracto'=> 'Los conjuntos residenciales y edificios de oficinas también deben cumplir con el SG-SST. Te explicamos cómo hacerlo.',
        ],
        [
            'slug'    => 'evaluacion-rps-2026',
            'titulo'  => 'Nueva evaluación de Riesgo Psicosocial 2026',
            'fecha'   => '2026-01-02',
            'imagen'  => 'assets/img/blog/rps-2026.png',
            'extracto'=> 'Conoce el portafolio actualizado de evaluación RPS 2026 con los nuevos lineamientos del Ministerio del Trabajo.',
        ],
    ];

    public function index()
    {
        return view('blog/index', [
            'title'     => 'Blog SST',
            'description'=> 'Artículos sobre Seguridad y Salud en el Trabajo, Riesgo Psicosocial y normativa colombiana.',
            'articulos' => $this->articulos,
        ]);
    }

    public function articulo(string $slug)
    {
        $vista = 'blog/articulos/' . $slug;

        if (! file_exists(APPPATH . 'Views/' . $vista . '.php')) {
            throw new PageNotFoundException("Artículo no encontrado: {$slug}");
        }

        $meta = null;
        foreach ($this->articulos as $a) {
            if ($a['slug'] === $slug) { $meta = $a; break; }
        }

        return view($vista, [
            'title'       => $meta['titulo'] ?? 'Artículo',
            'description' => $meta['extracto'] ?? '',
            'meta'        => $meta,
        ]);
    }
}
