<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;
use App\Models\GeoNivel2Model;

//use App\Controllers\Departamentos;
//use App\Models\MunicipiosModel;

class GeoNivel2 extends ResourceController
{





    private $db;
    private $paisResidenciaModel;
    private $geoNivel1Model;
    private $geoNivel2Model;
    //private $municipiosModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->paisResidenciaModel = new PaisResidenciaModel();
        $this->geoNivel1Model = new GeoNivel1Model();
        $this->geoNivel2Model = new GeoNivel2Model();
        // $this->municipiosModel = new MunicipiosModel();
    }





    /* public function import()
    {

        $session = session();

        $municipios = $this->municipiosModel->findAll();

        $i = 7000;
        foreach ($municipios as $municipio) {

            $data['geo_nivel1_codigo'] = $municipio['departamento_codigo'];
            $data['codigo'] = $i;
            $data['nombre'] = $municipio['nombre'];
            //print_r($data);
            $this->geoNivel2Model->insert($data, false);
            $i = $i + 1;
        }

        $session->setFlashdata('mensaje', 'Importación correcta');
        return redirect('geonivel2');


    } */








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
            pais_residencia.label_nivel2 AS clase_nivel2, 
            geo_nivel2.nombre, 
            pais_residencia.label_nivel1 AS clase_nivel1,
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
        $paisesResidencia = $this->paisResidenciaModel->findAll();
        $geoNivel1 = $this->geoNivel1Model->findAll();
        $data = [
            'titulo'                    => 'Nuevo nivel 2',
            'paisesResidencia'          => $paisesResidencia,
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

        $query = $this->db->table('geo_nivel2') // se obtiene el último codigo+1 para añadir el siguiente registro
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
                'codigo'                        => $siguienteCodigo,
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
        $geoNivel2 = $this->geoNivel2Model->find($id);
        $geoNiveles1 = $this->geoNivel1Model->findAll();
        $paisesResidencia = $this->paisResidenciaModel->findAll();

        $query = $this->db->table('geo_nivel1') // averigua nivel 1
        ->select('*')
        ->where(['geo_nivel1.codigo' => $geoNivel2['geo_nivel1_codigo']])
        ->limit(1);
        $query = $query->get();
        $nivel1 = $query->getResultArray();

        $query = $this->db->table('pais_residencia') // averigua pais
        ->select('*')
        ->where(['pais_residencia.codigo' => $nivel1[0]['pais_residencia_codigo']])
        ->limit(1);
        $query = $query->get();
        $pais = $query->getResultArray();

        $data = [
            'titulo'                => 'Edición Nivel 2',
            'id'                    => $id,
            'geoNivel2'             => $geoNivel2,
            'pais'                  => $pais,
            'nivel1'                => $nivel1,
            'geoNiveles1'           => $geoNiveles1,
            'paisesResidencia'      => $paisesResidencia
        ];
        return view('geo-nivel2/edit', $data);
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
            'geoNivel1'                 => 'required',
            'geoNivel2'                    => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                //'codigo', 
                'geoNivel2',
                'paisResidencia',
                'geoNivel1'  
            ]);
            $data = [
                'nombre'                        => $post['geoNivel2'],
                'pais_residencia_codigo'        => $post['paisResidencia'],
                'geo_nivel1_codigo'             => $post['geoNivel1']
            ];
            $this->geoNivel2Model->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Nivel 2 modificado');
            return redirect('geonivel2');
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
