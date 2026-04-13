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

// Sitemap
$routes->get('/sitemap.xml', 'SitemapController::index');

// Contacto
$routes->get('/contacto',        'ContactoController::index');
$routes->post('/contacto/enviar','ContactoController::enviar');

// Legal
$routes->get('/legal/reglamento-interno', 'LegalController::reglamentoInterno');
$routes->get('/legal/reglamento-higiene', 'LegalController::reglamentoHigiene');

// Admin — Login (sin auth)
$routes->get('/admin/login',  'Admin\AuthController::login');
$routes->post('/admin/login', 'Admin\AuthController::attemptLogin');
$routes->get('/admin/logout', 'Admin\AuthController::logout');
// Recuperación de contraseña
$routes->get('/admin/forgot',        'Admin\AuthController::forgot');
$routes->post('/admin/forgot',       'Admin\AuthController::sendReset');
$routes->get('/admin/reset/(:segment)',  'Admin\AuthController::reset/$1');
$routes->post('/admin/reset/(:segment)', 'Admin\AuthController::updatePassword/$1');

// Admin — Protegido con auth
$routes->group('admin', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/',                       'Admin\DashboardController::index');
    // Contacto
    $routes->get('contacto',               'Admin\ContactoAdminController::index');
    $routes->get('contacto/(:num)',        'Admin\ContactoAdminController::ver/$1');
    $routes->get('contacto/eliminar/(:num)', 'Admin\ContactoAdminController::eliminar/$1');
    $routes->get('contacto/toggle/(:num)', 'Admin\ContactoAdminController::toggleLeido/$1');
    // Usuarios
    $routes->get('usuarios',               'Admin\UsuarioAdminController::index');
    $routes->get('usuarios/crear',         'Admin\UsuarioAdminController::crear');
    $routes->post('usuarios/guardar',      'Admin\UsuarioAdminController::guardar');
    $routes->get('usuarios/editar/(:num)', 'Admin\UsuarioAdminController::editar/$1');
    $routes->post('usuarios/actualizar/(:num)', 'Admin\UsuarioAdminController::actualizar/$1');
    $routes->get('usuarios/eliminar/(:num)', 'Admin\UsuarioAdminController::eliminar/$1');
    $routes->get('usuarios/toggle/(:num)', 'Admin\UsuarioAdminController::toggleActivo/$1');
    // Galería de servicios
    $routes->get('galeria',                'Admin\GaleriaAdminController::index');
    $routes->get('galeria/subir',          'Admin\GaleriaAdminController::subir');
    $routes->post('galeria/guardar',       'Admin\GaleriaAdminController::guardar');
    $routes->get('galeria/eliminar/(:num)','Admin\GaleriaAdminController::eliminar/$1');
    $routes->get('galeria/toggle/(:num)',  'Admin\GaleriaAdminController::toggleActivo/$1');
    // Blog
    $routes->get('blog',                   'Admin\BlogAdminController::index');
    $routes->get('blog/crear',             'Admin\BlogAdminController::crear');
    $routes->post('blog/guardar',          'Admin\BlogAdminController::guardar');
    $routes->get('blog/editar/(:num)',     'Admin\BlogAdminController::editar/$1');
    $routes->post('blog/actualizar/(:num)','Admin\BlogAdminController::actualizar/$1');
    $routes->get('blog/eliminar/(:num)',   'Admin\BlogAdminController::eliminar/$1');
    $routes->get('blog/toggle/(:num)',     'Admin\BlogAdminController::togglePublicado/$1');
});

// Redirects 301 desde URLs de Joomla (preservar SEO)
$routes->get('/inicio/mision-y-vision',        static fn() => redirect()->to('/nosotros', 301));
$routes->get('/consultoria-sst',               static fn() => redirect()->to('/servicios/consultoria-sst', 301));
$routes->get('/riesgo-psicosocial',            static fn() => redirect()->to('/servicios/riesgo-psicosocial', 301));
$routes->get('/sg-sst-propiedad-horizontal',   static fn() => redirect()->to('/servicios/propiedad-horizontal', 301));
$routes->get('/clientes-cycloid-talent',       static fn() => redirect()->to('/clientes', 301));
$routes->get('/auditoria-sg-sst-proveedores',  static fn() => redirect()->to('/servicios/auditoria-proveedores', 301));
$routes->get('/vigia-sst',                     static fn() => redirect()->to('/servicios/vigia-sst', 301));
