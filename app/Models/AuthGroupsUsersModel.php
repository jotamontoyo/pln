<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthGroupsUsersModel extends Model
{
    protected $table            = 'auth_groups_users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'group'];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';


    public function getGroupsUser($id)
    {
        $query = $this->db->table('auth_groups_users')
        ->select('
            auth_groups_users.id,
            auth_groups_users.user_id,
            auth_groups_users.group
        ')
        ->where(['auth_groups_users.user_id' => $id]);
        $query = $query->get();
        return $query->getResultArray();
    }



}
