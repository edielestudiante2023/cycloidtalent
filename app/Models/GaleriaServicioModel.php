<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriaServicioModel extends Model
{
    protected $table         = 'galeria_servicios';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['titulo', 'imagen', 'servicio', 'orden', 'activo'];
    protected $useTimestamps = false;

    public function getPorServicio(string $servicio)
    {
        return $this->where('servicio', $servicio)
                    ->where('activo', 1)
                    ->orderBy('orden', 'ASC')
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }
}
