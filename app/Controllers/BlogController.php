<?php

namespace App\Controllers;

use Config\BlogArticles;
use CodeIgniter\Exceptions\PageNotFoundException;

class BlogController extends BaseController
{
    private array $articulos;

    public function __construct()
    {
        $this->articulos = BlogArticles::getAll();
    }

    public function index()
    {
        return view('blog/index', [
            'title'       => 'Blog SST',
            'description' => 'Artículos sobre Seguridad y Salud en el Trabajo, Riesgo Psicosocial y normativa colombiana.',
            'canonical'   => base_url('blog'),
            'articulos'   => $this->articulos,
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

        $url = base_url('blog/' . $slug);

        return view($vista, [
            'title'       => $meta['titulo'] ?? 'Artículo',
            'description' => $meta['extracto'] ?? '',
            'canonical'   => $url,
            'og_type'     => 'article',
            'og_image'    => base_url($meta['imagen'] ?? 'assets/img/logos/cycloid-og-default.png'),
            'meta'        => $meta,
            'jsonld'      => seo_graph_jsonld([
                seo_article_jsonld($meta),
                seo_breadcrumb_jsonld([
                    ['Inicio', base_url('/')],
                    ['Blog', base_url('blog')],
                    [$meta['titulo'], $url],
                ]),
            ]),
        ]);
    }
}
