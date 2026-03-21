<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/',         'HomeController::index');
$routes->get('/clientes', 'HomeController::clientes');

// Nosotros
$routes->get('/nosotros', 'NosotrosController::index');

// Servicios
$routes->get('/servicios/consultoria-sst',      'ServiciosController::consultoriaSst');
$routes->get('/servicios/riesgo-psicosocial',   'ServiciosController::riesgoPsicosocial');
$routes->get('/servicios/propiedad-horizontal', 'ServiciosController::propiedadHorizontal');
$routes->get('/servicios/brigada-emergencia',   'ServiciosController::brigadaEmergencia');
$routes->get('/servicios/auditoria-proveedores','ServiciosController::auditoriaProveedores');
$routes->get('/servicios/vigia-sst',            'ServiciosController::vigilaSst');

// Blog
$routes->get('/blog',            'BlogController::index');
$routes->get('/blog/(:segment)', 'BlogController::articulo/$1');

// Contacto
$routes->get('/contacto',        'ContactoController::index');
$routes->post('/contacto/enviar','ContactoController::enviar');

// Legal
$routes->get('/legal/reglamento-interno', 'LegalController::reglamentoInterno');
$routes->get('/legal/reglamento-higiene', 'LegalController::reglamentoHigiene');

// Redirects 301 desde URLs de Joomla (preservar SEO)
$routes->get('/inicio/mision-y-vision',        static fn() => redirect()->to('/nosotros', 301));
$routes->get('/consultoria-sst',               static fn() => redirect()->to('/servicios/consultoria-sst', 301));
$routes->get('/riesgo-psicosocial',            static fn() => redirect()->to('/servicios/riesgo-psicosocial', 301));
$routes->get('/sg-sst-propiedad-horizontal',   static fn() => redirect()->to('/servicios/propiedad-horizontal', 301));
$routes->get('/clientes-cycloid-talent',       static fn() => redirect()->to('/clientes', 301));
$routes->get('/auditoria-sg-sst-proveedores',  static fn() => redirect()->to('/servicios/auditoria-proveedores', 301));
$routes->get('/vigia-sst',                     static fn() => redirect()->to('/servicios/vigia-sst', 301));
