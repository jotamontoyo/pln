<?php

namespace App\Models;

use CodeIgniter\Model;

class GeoNivel2Model extends Model
{
    protected $table            = 'geo_nivel2';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'codigo', 
        'geo_nivel1_codigo',
        'label',
        'nombre'
    ];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}