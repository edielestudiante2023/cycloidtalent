<?php

namespace App\Controllers;

use Config\BlogArticles;

class SitemapController extends BaseController
{
    public function index()
    {
        $this->response->setContentType('application/xml');

        $urls = [
            ['loc' => base_url('/'),                              'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => base_url('servicios/consultoria-sst'),      'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => base_url('servicios/riesgo-psicosocial'),   'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => base_url('servicios/propiedad-horizontal'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => base_url('servicios/brigada-emergencia'),   'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => base_url('servicios/auditoria-proveedores'),'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => base_url('servicios/vigia-sst'),            'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => base_url('blog'),                           'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => base_url('nosotros'),                       'priority' => '0.5', 'changefreq' => 'monthly'],
            ['loc' => base_url('contacto'),                       'priority' => '0.5', 'changefreq' => 'monthly'],
            ['loc' => base_url('clientes'),                       'priority' => '0.4', 'changefreq' => 'monthly'],
        ];

        // Blog articles
        foreach (BlogArticles::getAll() as $a) {
            $urls[] = [
                'loc'        => base_url('blog/' . $a['slug']),
                'priority'   => '0.6',
                'changefreq' => 'monthly',
                'lastmod'    => $a['fecha'],
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $u) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>{$u['loc']}</loc>\n";
            if (isset($u['lastmod'])) {
                $xml .= "    <lastmod>{$u['lastmod']}</lastmod>\n";
            }
            $xml .= "    <changefreq>{$u['changefreq']}</changefreq>\n";
            $xml .= "    <priority>{$u['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return $this->response->setBody($xml);
    }
}
