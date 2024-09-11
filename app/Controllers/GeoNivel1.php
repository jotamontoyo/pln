<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;

// use App\Models\DepartamentosModel;


class GeoNivel1 extends ResourceController
{





    private $db;
    private $paisResidenciaModel;
    private $geoNivel1Model;
    // private $departamentosModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->paisResidenciaModel = new PaisResidenciaModel();
        $this->geoNivel1Model = new GeoNivel1Model();
        // $this->departamentosModel = new DepartamentosModel();
    }





    /* public function import()
    {

        $session = session();

        $departamentos = $this->departamentosModel->findAll();

        //print_r($departamentos);
        foreach ($departamentos as $departamento) {

            $data['pais_residencia_codigo'] = 50;
            $data['codigo'] = $departamento['codigo'];
            $data['nombre'] = $departamento['nombre'];

            $this->geoNivel1Model->insert($data, false);
        }


        $session->setFlashdata('mensaje', 'Importación correcta');
        return redirect('geonivel1');
       
        //$this->geoNivel1Model->insert($data, false);





    }*/



    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Nivel 1 de residencia'
        ];
        return view('geo-nivel1/index', $data);
        
    }








    public function listar_nivel()
    {
        //$this->db = db_connect();
        $builder = $this->db->table('geo_nivel1')
        ->select('
            geo_nivel1.id, 
            geo_nivel1.codigo, 
            geo_nivel1.nombre, 
            pais_residencia.label_nivel1 AS nivel, 
            pais_residencia.nombre AS pais, 
        ') 
        ->join('pais_residencia', 'pais_residencia.codigo = geo_nivel1.pais_residencia_codigo');
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
        $paisesResidencia = $this->paisResidenciaModel->findAll();
        $data = [
            'titulo'                => 'Nuevo nivel 1',
            'paisesResidencia'      => $paisesResidencia
        ];
        return view('geo-nivel1/new', $data);
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
            'paisResidencia'        => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'codigo', 
                'nombre',
                'paisResidencia'  
            ]);

            $data = [
                'codigo'                        => $post['codigo'],
                'nombre'                        => $post['nombre'],
                'pais_residencia_codigo'        => $post['paisResidencia']
            ];
            $this->geoNivel1Model->insert($data, false);
            $session->setFlashdata('mensaje', 'Nivel creado');
            return redirect('geonivel1');
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
        //
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
        //
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
