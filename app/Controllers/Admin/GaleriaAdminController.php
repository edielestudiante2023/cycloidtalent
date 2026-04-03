<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GaleriaServicioModel;

class GaleriaAdminController extends BaseController
{
    protected GaleriaServicioModel $galeriaModel;

    public function __construct()
    {
        $this->galeriaModel = new GaleriaServicioModel();
    }

    public function index()
    {
        return view('admin/galeria/index', [
            'title'  => 'Galería de servicios',
            'fotos'  => $this->galeriaModel->orderBy('orden', 'ASC')->orderBy('created_at', 'DESC')->findAll(),
        ]);
    }

    public function subir()
    {
        return view('admin/galeria/subir', [
            'title' => 'Subir foto',
        ]);
    }

    public function guardar()
    {
        $rules = [
            'titulo'  => 'required|max_length[150]',
            'imagen'  => 'uploaded[imagen]|is_image[imagen]|max_size[imagen,5120]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $img = $this->request->getFile('imagen');

        if (! $img->isValid() || $img->hasMoved()) {
            return redirect()->back()->with('error', 'Error al subir la imagen.');
        }

        $newName = $img->getRandomName();
        $img->move(FCPATH . 'assets/img/servicios', $newName);

        $this->galeriaModel->insert([
            'titulo'   => $this->request->getPost('titulo'),
            'imagen'   => $newName,
            'servicio' => $this->request->getPost('servicio') ?: 'riesgo-psicosocial',
            'orden'    => (int) $this->request->getPost('orden'),
        ]);

        return redirect()->to(base_url('admin/galeria'))->with('success', 'Foto subida correctamente.');
    }

    public function eliminar(int $id)
    {
        $foto = $this->galeriaModel->find($id);

        if ($foto) {
            $path = FCPATH . 'assets/img/servicios/' . $foto['imagen'];
            if (is_file($path)) {
                unlink($path);
            }
            $this->galeriaModel->delete($id);
        }

        return redirect()->to(base_url('admin/galeria'))->with('success', 'Foto eliminada.');
    }

    public function toggleActivo(int $id)
    {
        $foto = $this->galeriaModel->find($id);

        if ($foto) {
            $this->galeriaModel->update($id, ['activo' => $foto['activo'] ? 0 : 1]);
        }

        return redirect()->to(base_url('admin/galeria'));
    }
}
