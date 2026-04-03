<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactoModel;

class ContactoAdminController extends BaseController
{
    protected ContactoModel $contactoModel;

    public function __construct()
    {
        $this->contactoModel = new ContactoModel();
    }

    public function index()
    {
        return view('admin/contacto/index', [
            'mensajes' => $this->contactoModel->orderBy('created_at', 'DESC')->findAll(),
        ]);
    }

    public function ver(int $id)
    {
        $mensaje = $this->contactoModel->find($id);

        if (! $mensaje) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Marcar como leído
        if (! $mensaje['leido']) {
            $this->contactoModel->update($id, ['leido' => 1]);
            $mensaje['leido'] = 1;
        }

        return view('admin/contacto/ver', ['mensaje' => $mensaje]);
    }

    public function eliminar(int $id)
    {
        $this->contactoModel->delete($id);
        return redirect()->to(base_url('admin/contacto'))->with('success', 'Mensaje eliminado.');
    }

    public function toggleLeido(int $id)
    {
        $mensaje = $this->contactoModel->find($id);

        if ($mensaje) {
            $this->contactoModel->update($id, ['leido' => $mensaje['leido'] ? 0 : 1]);
        }

        return redirect()->to(base_url('admin/contacto'));
    }
}
