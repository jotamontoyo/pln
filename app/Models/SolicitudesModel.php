<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitudesModel extends Model
{
    protected $table            = 'solicitudes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'afiliado_id', 
        'nombre', 
        'apellidos', 
        'cedula', 
        'cedula_img', 
        'pasaporte', 
        'licencia', 
        'residencia', 
        'otra_identificacion', 
        'otra_identificacion_tipo', 
        'ciudad', 
        'pais',
        'whatsapp',
        'email',
        'afiliado',
        'cargo',
        'posicion'
    ];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}
