<?php

namespace App\Controllers;


use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EstadosModel;
use \Hermawan\DataTables\DataTable;


class Estados extends BaseController
{


    private $db;
    private $estadosModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->estadosModel = new EstadosModel();
    }








    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Estados'
        ];
        return view('estados/index', $data);
        
    }








    public function listar_estados()
    {
        //$this->db = db_connect();
        $builder = $this->db->table('estados')
        ->select('
            estados.id, 
            estados.codigo, 
            estados.nombre, 
            estados.created_at,
            estados.updated_at,
            estados.deleted_at
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
        $data = [
            'titulo' => 'Estados'
        ];
        return view('estados/new', $data);
    }

















    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $session = session();
        $reglas = [                     // de validacion
            'codigo'                => 'required',
            'nombre'                => 'required', 
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'codigo', 
                'nombre', 
  
            ]);

            $data = [
                'codigo'           => $post['codigo'],
                'nombre'                => $post['nombre']
            ];
            $this->estadosModel->insert($data, false);
            $session->setFlashdata('mensaje', 'Estado creado');
            return redirect('estados');
        };
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
        $estado = $this->estadosModel->find($id);
        $data = [
            'titulo' => 'Estado',
            'id' => $id,
            'estado' => $estado
        ];
        return view('estados/edit', $data);
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
        $session = session();
        $reglas = [                     
            'codigo'           => 'required', 
            'nombre'           => 'required'
        ];

        if(!$this->validate($reglas)){
            $session->setFlashdata('mensaje', 'Error(s) en formulario');
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        } else {
            $post = $this->request->getPost(['codigo', 'nombre']);
            $data = [
                'codigo'           => $post['codigo'],
                'nombre'           => $post['nombre']
            ];
                
            $this->estadosModel->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Estado actualizado');
            return redirect('estados');
        }
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
