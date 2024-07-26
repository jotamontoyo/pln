<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;

use App\Models\SolicitudesModel;
use App\Models\EstadosModel;
use App\Models\DepartamentosModel;
use App\Models\MunicipiosModel;

class Solicitudes extends BaseController
{


    private $db;
    private $solicitudesModel;
    private $estadosModel;
    private $departamentosModel;
    private $municipiosModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->solicitudesModel = new SolicitudesModel();
        $this->estadosModel = new EstadosModel();
        $this->departamentosModel = new DepartamentosModel();
        $this->municipiosModel = new MunicipiosModel();
        
    }







    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Solicitudes'
        ];
        return view('solicitudes/index', $data);
    }





    public function listar_solicitudes()
    {
        $this->db = db_connect();
        $builder = $this->db->table('solicitudes')
        ->select('
            solicitudes.id, 
            solicitudes.afiliado_id, 
            solicitudes.nombre, 
            solicitudes.apellidos, 
            solicitudes.cedula, 
            solicitudes.ciudad,
            solicitudes.pais,
            solicitudes.afiliado,
            solicitudes.cargo,
            solicitudes.posicion,
            solicitudes.created_at,
            solicitudes.updated_at,
            solicitudes.deleted_at
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
        //
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
            //'afiliado_id'           => 'required|is_unique[solicitudes.afiliado_id]',
            'nombre'                => 'required', 
            'apellidos'             => 'required', 
            /*'cedula'                => 'is_unique[solicitudes.cedula]', 
            'pasaporte'             => 'required|is_unique[solicitudes.pasaporte]', 
            'licencia'              => 'required|is_unique[solicitudes.licencia]', 
            'residencia'            => 'required|is_unique[solicitudes.residencia]', */
            'estado_id'             => 'required',
            /* 'departamento_id'       => 'required',
            'municipio_id'          => 'required', */
            'ciudad'                => 'required', 
             /* 'pais'                  => 'required', */
            'whatsapp'              => 'required', 
            'email'                 => 'required', 
            'afiliado'              => 'required', 
            //'cargo'                 => 'required', 
            'posicion'              => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'nombre', 
                'apellidos', 
                'cedula', 
                'cedula_img', 
                'pasaporte', 
                'licencia', 
                'residencia', 
                'estado_id', 
                'departamento_id', 
                'municipio_id', 
                'ciudad', 
                'pais', 
                'whatsapp', 
                'email', 
                'afiliado', 
                'cargo', 
                'posicion'
            ]);
            $file = $this->request->getFile('cedula_img');
            if(!$file->isValid()) {
                //echo $file->getErrorString();
                $session->setFlashdata('mensaje', 'No se ha cargado ninguna imagen');
                return redirect()->back()->withInput();
            };
            if(!$file->hasMoved()) { // si el archivo todavia no se ha movido, se fuerza a moverse a su ubicacion temporal writeable/uploads
                $ruta = ROOTPATH . 'public\img\cedulas' . DIRECTORY_SEPARATOR; // fija la ruta para guardar/mover en disco a su ubicacion definitiva (public)
                $file->move($ruta, $post['cedula_img'], true); // mueve el fichero de la carpeta temporal a su ubicacion definitiva
                $url = base_url() . 'public/img/cedulas/' . $file->getName(); // consigue la url para guardarla en el registro y verla en html
            };
            if($post['afiliado']) {$afiliado = 1;} else {$afiliado = 0;};
            if($post['cargo']) {$cargo = 1;} else {$cargo = 0;};
            $data = [
                'nombre'                => $post['nombre'],
                'apellidos'             => $post['apellidos'],
                'cedula'                => $post['cedula'],
                'cedula_img'            => $url,
                'pasaporte'             => $post['pasaporte'],
                'licencia'              => $post['licencia'],
                'residencia'            => $post['residencia'],
                'estado_id'             => $post['estado_id'],
                'departamento_id'       => $post['departamento_id'],
                'municipio_id'          => $post['municipio_id'],
                'ciudad'                => $post['ciudad'],
                'pais'                  => $post['pais'],
                'whatsapp'              => $post['whatsapp'],
                'email'                 => $post['email'],
                'afiliado'              => $afiliado,
                'cargo'                 => $cargo,
                'posicion'              => $post['posicion']
            ];
            $this->solicitudesModel->insert($data, false);
            $session->setFlashdata('mensaje', 'Solicitud enviada');
            return redirect('/');
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

        $estados = $this->estadosModel->findAll();
        $solicitud = $this->solicitudesModel->find($id);
        $data = [
            'titulo' => 'Solicitud',
            'id' => $id,
            'solicitud' => $solicitud,
            'estados' => $estados
        ];
        return view('solicitudes/edit', $data);

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
            'afiliado_id'           => 'required', 
            'nombre'                => 'required', 
            'apellidos'             => 'required', 
            /*'cedula'                => 'required', 
            'pasaporte'             => 'required', 
            'licencia'              => 'required', 
            'residencia'            => 'required',
            'ciudad'                => 'required', 
            'pais'                  => 'required', */
            'whatsapp'              => 'required', 
            'email'                 => 'required', 
            'afiliado'              => 'required', 
            'posicion'              => 'required',
            'estado_id'             => 'required'
        ];

        if(!$this->validate($reglas)){
            $session->setFlashdata('mensaje', 'Error(s) en formulario');
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        } else {
            $post = $this->request->getPost(['afiliado_id', 'nombre', 'apellidos', 'cedula', 'pasaporte', 'licencia', 'residencia', 'estado_id', 'ciudad', 'pais', 'whatsapp', 'email', 'afiliado', 'cargo', 'posicion']);
            if($post['afiliado']) {$afiliado = 1;} else {$afiliado = 0;};
            if($post['cargo']) {$cargo = 1;} else {$cargo = 0;};
            $data = [
                'afiliado_id'           => $post['afiliado_id'],
                'nombre'                => $post['nombre'],
                'apellidos'             => $post['apellidos'],
                'cedula'                => $post['cedula'],
                'pasaporte'             => $post['pasaporte'],
                'licencia'              => $post['licencia'],
                'residencia'            => $post['residencia'],
                'ciudad'                => $post['ciudad'],
                'pais'                  => $post['pais'],
                'whatsapp'              => $post['whatsapp'],
                'email'                 => $post['email'],
                'afiliado'              => $afiliado,
                'cargo'                 => $cargo,
                'posicion'              => $post['posicion'],
                'estado_id'             => $post['estado_id']
            ];
                
            $this->solicitudesModel->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Solicitud actualizada');
            return redirect('solicitudes');
        }
    }


    public function update_img($id)
    {
        $session = session();
        $post = $this->request->getPost(['cedula_img']);
        $file = $this->request->getFile('cedula_img');
        if(!$file->isValid()) {
            // echo $file->getErrorString();
            $session->setFlashdata('mensaje', 'No se ha cargado ninguna imagen');
            return redirect()->back()->withInput();
        };
        if(!$file->hasMoved()) { // si el archivo todavia no se ha movido, se fuerza a moverse a su ubicacion temporal writeable/uploads
            $ruta = ROOTPATH . 'public\img\cedulas' . DIRECTORY_SEPARATOR; // fija la ruta para guardar/mover en disco a su ubicacion definitiva (public)
            $file->move($ruta, $post['cedula_img'], true); // mueve el fichero de la carpeta temporal a su ubicacion definitiva
            $url = base_url() . 'public/img/cedulas/' . $file->getName(); // consigue la url para guardarla en el registro y verla en html
        };
        $data = ['cedula_img' => $url];
        $this->solicitudesModel->update($id, $data, false);
        return redirect()->back()->withInput();
        $session->setFlashdata('mensaje', 'Imagen actualizada');


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
