<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['rol_id', 'nombre', 'email', 'password', 'activo', 'ultimo_login', 'reset_token', 'reset_token_expires'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombre' => 'required|min_length[3]|max_length[100]',
        'email'  => 'required|valid_email|max_length[150]',
        'rol_id' => 'required|integer',
    ];

    public function getWithRol(int $id = null)
    {
        $builder = $this->select('usuarios.*, roles.nombre as rol_nombre')
                        ->join('roles', 'roles.id = usuarios.rol_id');

        if ($id !== null) {
            return $builder->find($id);
        }

        return $builder->findAll();
    }
}
