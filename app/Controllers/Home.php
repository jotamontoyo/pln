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
        $estados = $this->estadosModel->findAll();
        $departamentos = $this->departamentosModel->findAll();
        $municipios = $this->municipiosModel->findAll();

        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua',
            'estados'       => $estados,
            'departamentos' => $departamentos,
            'municipios'    => $municipios
        ];
        return view('index', $data);
    }




}
