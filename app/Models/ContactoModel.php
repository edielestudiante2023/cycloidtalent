<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactoModel extends Model
{
    protected $table         = 'contacto';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['nombre', 'email', 'telefono', 'empresa', 'asunto', 'mensaje', 'como_conocio', 'leido', 'ip_address'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';

    protected $validationRules = [
        'nombre'  => 'required|min_length[2]|max_length[100]',
        'email'   => 'required|valid_email|max_length[150]',
        'asunto'  => 'required|max_length[200]',
        'mensaje' => 'permit_empty',
    ];
}
