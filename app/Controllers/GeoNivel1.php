<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;

// use App\Models\DepartamentosModel;


class GeoNivel1 extends BaseController
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
        $query = $this->db->table('geo_nivel1') // se obtiene el último codigo+1 para añadir el siguiente registro
        ->select('*')
        ->orderBy('codigo', 'desc')
        ->limit(1);
        $query = $query->get();
        $query = $query->getResultArray();
        $siguienteCodigo = 0;
        $siguienteCodigo = $query[0]['codigo'] + 1;

        $session = session();
        $reglas = [                     // de validacion
            //'codigo'                => 'required',
            'nombre'                => 'required', 
            'paisResidencia'        => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                //'codigo', 
                'nombre',
                'paisResidencia'  
            ]);
            $data = [
                'codigo'                        => $siguienteCodigo,
                'nombre'                        => $post['nombre'],
                'pais_residencia_codigo'        => $post['paisResidencia']
            ];
            $this->geoNivel1Model->insert($data, false);
            $session->setFlashdata('mensaje', 'Nivel 1 creado');
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
        $geoNivel1 = $this->geoNivel1Model->find($id);
        $paisesResidencia = $this->paisResidenciaModel->findAll();
        $data = [
            'titulo'                => 'Edición Nivel 1',
            'id'                    => $id,
            'geoNivel1'             => $geoNivel1,
            'paisesResidencia'      => $paisesResidencia
        ];
        return view('geo-nivel1/edit', $data);
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
            'paisResidencia'            => 'required',
            'nombre'                    => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                //'codigo', 
                'nombre',
                'paisResidencia'  
            ]);
            $data = [
                'nombre'                        => $post['nombre'],
                'pais_residencia_codigo'        => $post['paisResidencia']
            ];
            $this->geoNivel1Model->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Nivel 1 modificado');
            return redirect('geonivel1');
        };

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
