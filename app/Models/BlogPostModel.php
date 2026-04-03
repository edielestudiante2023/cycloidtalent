<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogPostModel extends Model
{
    protected $table         = 'blog_posts';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['titulo', 'slug', 'extracto', 'contenido', 'imagen', 'autor_id', 'publicado'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getPublicados()
    {
        return $this->where('publicado', 1)
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }

    public function getBySlug(string $slug)
    {
        return $this->where('slug', $slug)
                    ->where('publicado', 1)
                    ->first();
    }

    public function getWithAutor(int $id = null)
    {
        $builder = $this->select('blog_posts.*, usuarios.nombre as autor_nombre')
                        ->join('usuarios', 'usuarios.id = blog_posts.autor_id', 'left');

        if ($id !== null) {
            return $builder->find($id);
        }

        return $builder->orderBy('blog_posts.created_at', 'DESC')->findAll();
    }
}
