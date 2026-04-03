<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Models\RolModel;

class UsuarioAdminController extends BaseController
{
    protected UsuarioModel $usuarioModel;
    protected RolModel $rolModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->rolModel     = new RolModel();
    }

    public function index()
    {
        return view('admin/usuarios/index', [
            'usuarios' => $this->usuarioModel->getWithRol(),
        ]);
    }

    public function crear()
    {
        return view('admin/usuarios/form', [
            'roles'   => $this->rolModel->findAll(),
            'usuario' => null,
        ]);
    }

    public function guardar()
    {
        $rules = [
            'nombre'   => 'required|min_length[3]|max_length[100]',
            'email'    => 'required|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[8]',
            'rol_id'   => 'required|integer',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->usuarioModel->insert([
            'nombre'   => $this->request->getPost('nombre'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'rol_id'   => $this->request->getPost('rol_id'),
            'activo'   => 1,
        ]);

        return redirect()->to(base_url('admin/usuarios'))->with('success', 'Usuario creado.');
    }

    public function editar(int $id)
    {
        $usuario = $this->usuarioModel->find($id);

        if (! $usuario) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/usuarios/form', [
            'roles'   => $this->rolModel->findAll(),
            'usuario' => $usuario,
        ]);
    }

    public function actualizar(int $id)
    {
        $rules = [
            'nombre' => 'required|min_length[3]|max_length[100]',
            'email'  => "required|valid_email|is_unique[usuarios.email,id,{$id}]",
            'rol_id' => 'required|integer',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email'  => $this->request->getPost('email'),
            'rol_id' => $this->request->getPost('rol_id'),
        ];

        $password = $this->request->getPost('password');
        if (! empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_BCRYPT);
        }

        $this->usuarioModel->update($id, $data);
        return redirect()->to(base_url('admin/usuarios'))->with('success', 'Usuario actualizado.');
    }

    public function eliminar(int $id)
    {
        // No permitir auto-eliminación
        if ((int) session()->get('usuario_id') === $id) {
            return redirect()->to(base_url('admin/usuarios'))->with('error', 'No puedes eliminar tu propia cuenta.');
        }

        $this->usuarioModel->delete($id);
        return redirect()->to(base_url('admin/usuarios'))->with('success', 'Usuario eliminado.');
    }

    public function toggleActivo(int $id)
    {
        if ((int) session()->get('usuario_id') === $id) {
            return redirect()->to(base_url('admin/usuarios'))->with('error', 'No puedes desactivar tu propia cuenta.');
        }

        $usuario = $this->usuarioModel->find($id);

        if ($usuario) {
            $this->usuarioModel->update($id, ['activo' => $usuario['activo'] ? 0 : 1]);
        }

        return redirect()->to(base_url('admin/usuarios'));
    }
}
