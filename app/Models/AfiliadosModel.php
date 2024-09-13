<?php

namespace App\Models;

use CodeIgniter\Model;

class AfiliadosModel extends Model
{
    protected $table            = 'afiliados';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'solicitud_id',
        'afiliado_id', 
        'nombre', 
        'apellidos', 
        'fecha_nacimiento',
        'genero',
        'cedula', 
        'pais_residencia_codigo',
        'geo_nivel1_codigo',
        'geo_nivel2_codigo',
        'cedula_img', 
        'tipo_doc', 
        'numero_doc', 
        'expedicion_doc', 
        'pasaporte', 
        'licencia', 
        'residencia', 
        'otra_identificacion', 
        'otra_identificacion_tipo', 
        'estado_id', 
        'departamento_id', 
        'municipio_id', 
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
