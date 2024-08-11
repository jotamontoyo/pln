<?php

namespace App\Controllers;


use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DepartamentosModel;
use \Hermawan\DataTables\DataTable;


class Departamentos extends BaseController
{


    private $db;
    private $departamentosModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->departamentosModel = new DepartamentosModel();
    }








    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Departamentos'
        ];
        return view('departamentos/index', $data);
        
    }








    public function listar_departamentos()
    {
        //$this->db = db_connect();
        $builder = $this->db->table('departamentos')
        ->select('
            departamentos.id, 
            departamentos.codigo, 
            departamentos.nombre, 
            departamentos.created_at,
            departamentos.updated_at,
            departamentos.deleted_at
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
            'titulo' => 'Departamentos'
        ];
        return view('departamentos/new', $data);
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
            'codigo'                => 'required|is_unique[estados.codigo]',
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
                'nombre'           => $post['nombre']
            ];
            $this->departamentosModel->insert($data, false);
            $session->setFlashdata('mensaje', 'Departamento creado');
            return redirect('departamentos');
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
        $departamento = $this->departamentosModel->find($id);
        $data = [
            'titulo' => 'Departamentos',
            'id' => $id,
            'departamento' => $departamento
        ];
        return view('departamentos/edit', $data);
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
                'codigo'            => $post['codigo'],
                'nombre'            => $post['nombre']
            ];
                
            $this->departamentosModel->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Departamento actualizado');
            return redirect('departamentos');
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
