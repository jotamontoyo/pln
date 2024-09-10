<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;
use App\Models\GeoNivel2Model;


class GeoNivel2 extends ResourceController
{





    private $db;
    private $paisResidenciaModel;
    private $geoNivel1Model;
    private $geoNivel2Model;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->paisResidenciaModel = new PaisResidenciaModel();
        $this->geoNivel1Model = new GeoNivel1Model();
        $this->geoNivel2Model = new GeoNivel2Model();
    }






    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Nivel 2 de residencia'
        ];
        return view('geo-nivel2/index', $data);
        
    }








    public function listar_nivel()
    {
        //$this->db = db_connect();
        $builder = $this->db->table('geo_nivel2')
        ->select('
            geo_nivel2.id, 
            geo_nivel2.codigo, 
            geo_nivel2.nombre, 
            geo_nivel1.nombre AS nivel1,
            pais_residencia.nombre AS pais
        ')
        ->join('geo_nivel1', 'geo_nivel1.codigo = geo_nivel2.geo_nivel1_codigo')
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
        $geoNivel1 = $this->geoNivel1Model->findAll();
        $data = [
            'titulo'                    => 'Nuevo nivel 2',
            'geoNiveles1'               => $geoNivel1
        ];
        return view('geo-nivel2/new', $data);
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
            'geoNivel1'             => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'codigo', 
                'nombre',
                'geoNivel1'  
            ]);

            $data = [
                'codigo'                        => $post['codigo'],
                'nombre'                        => $post['nombre'],
                'geo_nivel1_codigo'             => $post['geoNivel1']
            ];
            $this->geoNivel2Model->insert($data, false);
            $session->setFlashdata('mensaje', 'Nivel creado');
            return redirect('geonivel2');
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
