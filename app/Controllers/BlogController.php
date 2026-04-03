<?php

namespace App\Controllers;

use App\Models\BlogPostModel;

class BlogController extends BaseController
{
    public function index()
    {
        $blogModel = new BlogPostModel();

        return view('blog/index', [
            'title'       => 'Blog',
            'description' => 'Artículos sobre Seguridad y Salud en el Trabajo, riesgo psicosocial y normativa SST en Colombia.',
            'canonical'   => base_url('blog'),
            'posts'       => $blogModel->getPublicados(),
        ]);
    }

    public function articulo(string $slug)
    {
        $blogModel = new BlogPostModel();
        $post = $blogModel->getBySlug($slug);

        if (! $post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('blog/articulo', [
            'title'       => $post['titulo'],
            'description' => $post['extracto'] ?: mb_substr(strip_tags($post['contenido']), 0, 160),
            'canonical'   => base_url('blog/' . $post['slug']),
            'post'        => $post,
        ]);
    }
}
