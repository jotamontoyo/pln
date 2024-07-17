<?php

namespace App\Controllers;



class Home extends BaseController
{

    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
         
    }







    public function index()
    {
        $data = [
            'titulo'        => 'Inicio'
        ];
        return view('index', $data);
    }
}
