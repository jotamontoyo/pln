<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthPermissionsUsersModel extends Model
{
    protected $table            = 'auth_permissions_users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'permission'];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';


    public function getPermissionsUser($id)
    {
        $query = $this->db->table('auth_permissions_users')
        ->select('
            auth_permissions_users.id,
            auth_permissions_users.user_id,
            auth_permissions_users.permission
        ')
        ->where(['auth_permissions_users.user_id' => $id]);
        $query = $query->get();
        return $query->getResultArray();
    }

}
