<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\AfiliadosModel;
use App\Models\SolicitudesModel;
use App\Models\EstadosModel;
use CodeIgniter\Shield\Models\UserModel;


class Afiliados extends ResourceController
{


    private $db;
    private $solicitudesModel;
    private $afiliadosModel;
    private $estadosModel;
    private $userModel;



    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->solicitudesModel = new SolicitudesModel();
        $this->afiliadosModel = new AfiliadosModel();
        $this->estadosModel = new EstadosModel();
        $this->userModel = new UserModel();
        
    }




    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Afiliados'
        ];
        return view('afiliados/index', $data);
    }






    public function listar_afiliados()
    {
        $builder = $this->db->table('afiliados')
        ->select('
            afiliados.id, 
            users.username AS user, 
            afiliados.solicitud_id, 
            afiliados.afiliado_id, 
            afiliados.nombre, 
            afiliados.apellidos, 
            (YEAR(NOW()) - YEAR(afiliados.fecha_nacimiento)) AS edad,
            afiliados.genero, 
            estados.nombre AS residencia,
            afiliados.cedula, 
            afiliados.ciudad,
            afiliados.pais,
            afiliados.created_at,
            afiliados.updated_at,
            afiliados.deleted_at
        ')
        ->join('estados', 'estados.id = afiliados.estado_id')
        ->join('users', 'users.id = afiliados.user_id');
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
        $estados = $this->estadosModel->findAll();
        $afiliado = $this->afiliadosModel->find($id);
        $user = $this->userModel->find($afiliado['user_id']);
        $edad = strtotime(date('Y-m-d')) - strtotime($afiliado['fecha_nacimiento']);
        $data = [
            'titulo'        => 'Solicitud',
            'id'            => $id,
            'afiliado'      => $afiliado,
            'edad'          => $edad,
            'estados'       => $estados,
            'user'          => $user
        ];
        return view('afiliados/edit', $data);
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
        echo($id);
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
