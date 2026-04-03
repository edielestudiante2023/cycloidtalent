<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogPostModel;

class BlogAdminController extends BaseController
{
    protected BlogPostModel $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogPostModel();
    }

    public function index()
    {
        return view('admin/blog/index', [
            'title' => 'Blog',
            'posts' => $this->blogModel->getWithAutor(),
        ]);
    }

    public function crear()
    {
        return view('admin/blog/form', [
            'title' => 'Crear artículo',
            'post'  => null,
        ]);
    }

    public function guardar()
    {
        $rules = [
            'titulo'    => 'required|max_length[255]',
            'contenido' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $titulo = $this->request->getPost('titulo');
        $slug   = url_title($titulo, '-', true);

        // Verificar slug único
        $existing = $this->blogModel->where('slug', $slug)->first();
        if ($existing) {
            $slug .= '-' . time();
        }

        $data = [
            'titulo'    => $titulo,
            'slug'      => $slug,
            'extracto'  => $this->request->getPost('extracto'),
            'contenido' => $this->request->getPost('contenido'),
            'autor_id'  => session()->get('usuario_id'),
            'publicado' => $this->request->getPost('publicado') ? 1 : 0,
        ];

        // Imagen
        $img = $this->request->getFile('imagen');
        if ($img && $img->isValid() && ! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'assets/img/blog', $newName);
            $data['imagen'] = $newName;
        }

        $this->blogModel->insert($data);
        return redirect()->to(base_url('admin/blog'))->with('success', 'Artículo creado.');
    }

    public function editar(int $id)
    {
        $post = $this->blogModel->find($id);

        if (! $post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/blog/form', [
            'title' => 'Editar artículo',
            'post'  => $post,
        ]);
    }

    public function actualizar(int $id)
    {
        $rules = [
            'titulo'    => 'required|max_length[255]',
            'contenido' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'titulo'    => $this->request->getPost('titulo'),
            'extracto'  => $this->request->getPost('extracto'),
            'contenido' => $this->request->getPost('contenido'),
            'publicado' => $this->request->getPost('publicado') ? 1 : 0,
        ];

        // Nueva imagen (opcional)
        $img = $this->request->getFile('imagen');
        if ($img && $img->isValid() && ! $img->hasMoved()) {
            // Eliminar imagen anterior
            $post = $this->blogModel->find($id);
            if (! empty($post['imagen'])) {
                $oldPath = FCPATH . 'assets/img/blog/' . $post['imagen'];
                if (is_file($oldPath)) {
                    unlink($oldPath);
                }
            }

            $newName = $img->getRandomName();
            $img->move(FCPATH . 'assets/img/blog', $newName);
            $data['imagen'] = $newName;
        }

        $this->blogModel->update($id, $data);
        return redirect()->to(base_url('admin/blog'))->with('success', 'Artículo actualizado.');
    }

    public function eliminar(int $id)
    {
        $post = $this->blogModel->find($id);

        if ($post && ! empty($post['imagen'])) {
            $path = FCPATH . 'assets/img/blog/' . $post['imagen'];
            if (is_file($path)) {
                unlink($path);
            }
        }

        $this->blogModel->delete($id);
        return redirect()->to(base_url('admin/blog'))->with('success', 'Artículo eliminado.');
    }

    public function togglePublicado(int $id)
    {
        $post = $this->blogModel->find($id);

        if ($post) {
            $this->blogModel->update($id, ['publicado' => $post['publicado'] ? 0 : 1]);
        }

        return redirect()->to(base_url('admin/blog'));
    }
}
