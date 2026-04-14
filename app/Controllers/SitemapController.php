<?php

namespace App\Controllers;

use App\Models\BlogPostModel;

class SitemapController extends BaseController
{
    public function index()
    {
        $this->response->setContentType('application/xml');
        $this->response->setHeader('Cache-Control', 'public, max-age=86400'); // 1 día

        $today = date('Y-m-d');

        // Páginas principales con prioridad alta
        $urls = [
            ['loc' => base_url('/'),                              'priority' => '1.0', 'changefreq' => 'weekly',  'lastmod' => $today],

            // Servicios — prioridad máxima
            ['loc' => base_url('servicios/consultoria-sst'),      'priority' => '0.9', 'changefreq' => 'monthly', 'lastmod' => $today],
            ['loc' => base_url('servicios/riesgo-psicosocial'),   'priority' => '0.9', 'changefreq' => 'monthly', 'lastmod' => $today],
            ['loc' => base_url('servicios/propiedad-horizontal'), 'priority' => '0.9', 'changefreq' => 'monthly', 'lastmod' => $today],

            // Páginas institucionales
            ['loc' => base_url('nosotros'),                       'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => $today],
            ['loc' => base_url('clientes'),                       'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => $today],
            ['loc' => base_url('blog'),                           'priority' => '0.8', 'changefreq' => 'weekly',  'lastmod' => $today],
            ['loc' => base_url('contacto'),                       'priority' => '0.6', 'changefreq' => 'yearly',  'lastmod' => $today],

            // Páginas legales
            ['loc' => base_url('legal/reglamento-interno'),       'priority' => '0.3', 'changefreq' => 'yearly',  'lastmod' => $today],
            ['loc' => base_url('legal/reglamento-higiene'),       'priority' => '0.3', 'changefreq' => 'yearly',  'lastmod' => $today],
        ];

        // Artículos del blog (dinámicos)
        $blogModel = new BlogPostModel();
        foreach ($blogModel->getPublicados() as $p) {
            $urls[] = [
                'loc'        => base_url('blog/' . $p['slug']),
                'priority'   => '0.7',
                'changefreq' => 'monthly',
                'lastmod'    => date('Y-m-d', strtotime($p['updated_at'] ?? $p['created_at'])),
            ];
        }

        $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $u) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($u['loc'], ENT_XML1) . "</loc>\n";
            $xml .= "    <lastmod>{$u['lastmod']}</lastmod>\n";
            $xml .= "    <changefreq>{$u['changefreq']}</changefreq>\n";
            $xml .= "    <priority>{$u['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return $this->response->setBody($xml);
    }
}
