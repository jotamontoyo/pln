<?php

namespace App\Controllers;

use App\Models\EstadosModel;
use App\Models\DepartamentosModel;
use App\Models\MunicipiosModel;



class Home extends BaseController
{

    private $db;
    private $estadosModel;
    private $departamentosModel;
    private $municipiosModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->estadosModel = new EstadosModel();
        $this->departamentosModel = new DepartamentosModel();
        $this->municipiosModel = new MunicipiosModel();
         
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

        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua',
            'estados'       => $estados,
            'departamentos' => $departamentos,
            'municipios'    => $municipios
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









}
