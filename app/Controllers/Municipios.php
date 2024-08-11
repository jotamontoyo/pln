<?php

namespace App\Controllers;


use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MunicipiosModel;
use App\Models\DepartamentosModel;
use \Hermawan\DataTables\DataTable;


class Municipios extends BaseController
{


    private $db;
    private $municipiosModel;
    private $departamentosModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->municipiosModel = new MunicipiosModel();
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
            'titulo' => 'Municipios'
        ];
        return view('municipios/index', $data);
        
    }








    public function listar_municipios()
    {
        //$this->db = db_connect();
        $builder = $this->db->table('municipios')
        ->select('
            municipios.id, 
            municipios.codigo, 
            municipios.nombre, 
            departamentos.nombre as departamento, 
            municipios.created_at,
            municipios.updated_at,
            municipios.deleted_at
        ')
        ->join('departamentos', 'departamentos.codigo = municipios.departamento_codigo');
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

        $departamentos = $this->departamentosModel->findAll();
        $data = [
            'titulo'            => 'Municipios',
            'departamentos'     => $departamentos
        ];
        return view('municipios/new', $data);
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
            'departamento'          => 'required', 
            'codigo'                => 'required|is_unique[estados.codigo]',
            'nombre'                => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'departamento',
                'codigo', 
                'nombre', 
              ]);
            $data = [
                'departamento_codigo'       => $post['departamento'],
                'codigo'                    => $post['codigo'],
                'nombre'                    => $post['nombre']
            ];
            $this->municipiosModel->insert($data, false);
            $session->setFlashdata('mensaje', 'Municipio creado');
            return redirect('municipios');
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
        $municipio = $this->municipiosModel->find($id);
        $departamentos = $this->departamentosModel->findAll();
        $data = [
            'titulo' => 'Municipios',
            'id' => $id,
            'municipio' => $municipio,
            'departamentos' => $departamentos
        ];
        return view('municipios/edit', $data);
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
            'departamento'     => 'required', 
            'codigo'           => 'required', 
            'nombre'           => 'required'
        ];

        if(!$this->validate($reglas)){
            $session->setFlashdata('mensaje', 'Error(s) en formulario');
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        } else {
            $post = $this->request->getPost(['departamento', 'codigo', 'nombre']);
            $data = [
                'departamento_codigo'   => $post['departamento'],
                'codigo'                => $post['codigo'],
                'nombre'                => $post['nombre']
            ];
                
            $this->municipiosModel->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Municipio actualizado');
            return redirect('municipios');
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
