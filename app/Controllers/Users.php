<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\AuthPermissionsUsersModel;
use App\Models\AuthGroupsUsersModel;




class Users extends BaseController
{


    private $db;
    private $userModel;
    private $authPermissionsUsersModel;
    private $authGroupsUsersModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();  
        $this->userModel = new UserModel();                      
        $this->authPermissionsUsersModel = new AuthPermissionsUsersModel();                      
        $this->authGroupsUsersModel = new AuthGroupsUsersModel();                      
                    
    }




    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Usuarios',
        ];
        return view('users/index', $data);
    }








    public function listar_usuarios()
    {
        $this->db = db_connect();
        $builder = $this->db->table('users')
        ->select('
            users.id, 
            users.username, 
            users.status, 
            users.status_message, 
            users.active, 
            users.locale,
            users.last_active,
            users.created_at,
            users.updated_at,
            users.deleted_at
        ');
        return DataTable::of($builder)->toJson(true);
    }





    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }










    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }









    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }











    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $user = $this->userModel->find($id);
        $permissions = $this->authPermissionsUsersModel->getPermissionsUser($id);
        $groups = $this->authGroupsUsersModel->getGroupsUser($id);
        $data = [
            'titulo'            => 'Editar usuario',
            'id'                => $id,
            'user'              => $user,
            'permissions'       => $permissions,
            'groups'            => $groups
        ];
        return view('users/edit', $data);
    }













    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        echo('update user');
    }

















    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
