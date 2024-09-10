<?php

namespace App\Controllers;

use App\Models\EstadosModel;
use App\Models\DepartamentosModel;
use App\Models\MunicipiosModel;



use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;
use App\Models\GeoNivel2Model;



class Home extends BaseController
{

    private $db;
    private $estadosModel;
    private $departamentosModel;
    private $municipiosModel;

    private $paisResidenciaModel;
    private $geoNivel1Model;
    private $geoNivel2Model;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->estadosModel = new EstadosModel();
        $this->departamentosModel = new DepartamentosModel();
        $this->municipiosModel = new MunicipiosModel();
        $this->paisResidenciaModel = new PaisResidenciaModel();
        $this->geoNivel1Model = new GeoNivel1Model();
        $this->geoNivel2Model = new GeoNivel2Model();
         
    }







    public function index()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('index', $data);
    }






    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function solicitud_afiliacion()
    {
        $estados = $this->estadosModel->findAll();
        $departamentos = $this->departamentosModel->findAll();
        $municipios = $this->municipiosModel->findAll();

        $paisesResidencia = $this->paisResidenciaModel->findAll();
        $geoNiveles1 = $this->geoNivel1Model->findAll();
        $geoNiveles2 = $this->geoNivel2Model->findAll();


        $data = [
            'titulo'                => 'Partido Liberal de Nicaragua',
            'estados'               => $estados,
            'departamentos'         => $departamentos,
            'municipios'            => $municipios,
            'paisesResidencia'      => $paisesResidencia,
            'geoNiveles1'           => $geoNiveles1,
            'geoNiveles2'           => $geoNiveles2
        ];
        return view('formularios/solicitud-afiliacion', $data);
    }









    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function direccion_mision_vision()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/direccion-mision-vision', $data);
    }






    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function reglamento()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/reglamento', $data);
    }






    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function metodologia()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/metodologia', $data);
    }





    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function empadronamiento()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/empadronamiento', $data);
    }








    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function con_cedula_movil()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/con-cedula-movil', $data);
    }





    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function con_cedula_computadora()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/con-cedula-computadora', $data);
    }





    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function sin_cedula_movil()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/sin-cedula-movil', $data);
    }







    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function sin_cedula_computadora()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('instrucciones/sin-cedula-computadora', $data);
    }














    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function videos()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('comunicaciones/videos', $data);
    }








    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function articulos()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('comunicaciones/articulos', $data);
    }









}
