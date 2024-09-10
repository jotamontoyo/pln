<?php

namespace App\Models;

use CodeIgniter\Model;

class PaisResidenciaModel extends Model
{
    protected $table            = 'pais_residencia';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'codigo', 
        'nombre',
        'label_nivel1',
        'label_nivel2'
    ];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}