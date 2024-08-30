<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;

use App\Models\SolicitudesModel;
use App\Models\AfiliadosModel;
use App\Models\EstadosModel;
use App\Models\DepartamentosModel;
use App\Models\MunicipiosModel;



class Solicitudes extends BaseController
{


    private $db;
    private $solicitudesModel;
    private $afiliadosModel;
    private $estadosModel;
    private $departamentosModel;
    private $municipiosModel;



    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->solicitudesModel = new SolicitudesModel();
        $this->afiliadosModel = new AfiliadosModel();
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
        $builder = $this->db->table('solicitudes')
        ->select('
            solicitudes.id, 
            solicitudes.afiliacion_id, 
            solicitudes.nombre, 
            solicitudes.apellidos, 
            (YEAR(NOW()) - YEAR(solicitudes.fecha_nacimiento)) AS edad,
            solicitudes.genero, 
            estados.nombre AS residencia,
            solicitudes.cedula, 
            solicitudes.ciudad,
            solicitudes.pais,
            solicitudes.created_at,
            solicitudes.updated_at,
            solicitudes.deleted_at
        ')
        //->where(['solicitudes.afiliacion_id' => 0])

        ->join('estados', 'estados.id = solicitudes.estado_id');
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
             
            /*'cedula'                => 'is_unique[solicitudes.cedula]', */
            'genero'                => 'required',
            'estado_id'             => 'required',
            /* 'departamento_id'       => 'required',
            'municipio_id'          => 'required', */
            'ciudad'                => 'required', 
            'pais'                  => 'required',
            'whatsapp'              => 'required', 
            'email'                 => 'required', 
            'afiliado'              => 'required', 
            //'cargo'                 => 'required', 
            'posicion'              => 'required'
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario');
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'nombre', 
                'apellidos', 
                'fecha_nacimiento',
                'genero', 
                'cedula', 
                'cedula_img', 
                'estado_id', 
                'departamento_id', 
                'tipo_doc',
                'numero_doc',
                'expedicion_doc',
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
                return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
            };
            if(!$file->hasMoved()) { // si el archivo todavia no se ha movido, se fuerza a moverse a su ubicacion temporal writeable/uploads
                $apellidosMasFoto = $post['apellidos'] . ' - ' . $file->getName();
                $ruta = ROOTPATH . 'public/img/cedulas' . DIRECTORY_SEPARATOR; // fija la ruta para guardar/mover en disco a su ubicacion definitiva (public)
                $file->move($ruta, $apellidosMasFoto, true); // mueve el fichero de la carpeta temporal a su ubicacion definitiva
                $url = base_url() . 'public/img/cedulas/' . $apellidosMasFoto; // consigue la url para guardarla en el registro y verla en html
            };
            if($post['afiliado']) {$afiliado = 1;} else {$afiliado = 0;};
            if($post['cargo']) {$cargo = 1;} else {$cargo = 0;};
            $data = [
                'nombre'                => $post['nombre'],
                'apellidos'             => $post['apellidos'],
                'fecha_nacimiento'      => $post['fecha_nacimiento'],
                'genero'                => $post['genero'],
                'cedula'                => $post['cedula'],
                'cedula_img'            => $url,
                'estado_id'             => $post['estado_id'],
                'departamento_id'       => $post['departamento_id'],
                'municipio_id'          => $post['municipio_id'],
                'tipo_doc'              => $post['tipo_doc'],
                'numero_doc'            => $post['numero_doc'],
                'expedicion_doc'        => $post['expedicion_doc'],
                'ciudad'                => $post['ciudad'],
                'pais'                  => $post['pais'],
                'whatsapp'              => $post['whatsapp'],
                'email'                 => $post['email'],
                'afiliado'              => $afiliado,
                'cargo'                 => $cargo,
                'posicion'              => $post['posicion']
            ];
            //print_r($data);
            $this->solicitudesModel->insert($data, false);
            $session->setFlashdata('mensaje', 'Solicitud enviada');
            return redirect('/');
        };
    }








    


    public function create_afiliado($solicitud_id) 
    {
        
        $session = session();
        $solicitud = $this->solicitudesModel->find($solicitud_id);
        $data = [
            'user_id'               => auth()->user()->id,
            'solicitud_id'          => $solicitud['id'],
            'nombre'                => $solicitud['nombre'],
            'apellidos'             => $solicitud['apellidos'], 
            'fecha_nacimiento'      => $solicitud['fecha_nacimiento'],
            'genero'                => $solicitud['genero'],
            'cedula'                => $solicitud['cedula'], 
            'cedula_img'            => $solicitud['cedula_img'], 
            'estado_id'             => $solicitud['estado_id'], 
            'departamento_id'       => $solicitud['departamento_id'], 
            'municipio_id'          => $solicitud['municipio_id'],
            'tipo_doc'              => $solicitud['tipo_doc'],
            'numero_doc'            => $solicitud['numero_doc'],
            'expedicion_doc'        => $solicitud['expedicion_doc'],
            'ciudad'                => $solicitud['ciudad'], 
            'pais'                  => $solicitud['pais'], 
            'whatsapp'              => $solicitud['whatsapp'], 
            'email'                 => $solicitud['email'], 
            'afiliado'              => $solicitud['afiliado'], 
            'cargo'                 => $solicitud['cargo'], 
            'posicion'              => $solicitud['posicion']
        ];

    

        if ($solicitud['afiliacion_id']) {
            $session->setFlashdata('mensaje', 'La afilición ya existe');
            return redirect()->back()->withInput();
        } else {
            $this->afiliadosModel->insert($data, false);
            $ultimoId = $this->db->insertID();
            $data = ['afiliacion_id' => $ultimoId];
            $this->solicitudesModel->update($solicitud_id, $data);
            $session->setFlashdata('mensaje', 'Afiliación creada');
            return redirect()->back()->withInput();
        }
        
        


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
        $departamentos = $this->departamentosModel->findAll();
        $municipios = $this->municipiosModel->findAll();

        $builder = $this->db->table('afiliados'); //trae el afiliado_id de afiliados
        $builder
        ->select(' afiliados.id, afiliados.afiliado_id')
        ->where(['afiliados.solicitud_id' => $solicitud['id']]);
        $builder = $builder->get();
        $afiliado = $builder->getResultArray();
        if (!$afiliado) {
            $afiliado[0]['afiliado_id'] = 'Pendiente'; //numero de afiliado
        };



        $edad = strtotime(date('Y-m-d')) - strtotime($solicitud['fecha_nacimiento']);
        $data = [
            'titulo'                => 'Solicitud',
            'id'                    => $id,
            'solicitud'             => $solicitud,
            'edad'                  => $edad,
            'estados'               => $estados,
            'departamentos'         => $departamentos,
            'municipios'            => $municipios,
            'afiliado'              => $afiliado
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
            //'afiliado_id'           => 'required', 
            'nombre'                => 'required', 
            'apellidos'             => 'required',
            'fecha_nacimiento'      => 'required', 
            /*'cedula'                => 'required',*/
            'genero'                => 'required', 
            'ciudad'                => 'required', 
            'pais'                  => 'required',
            'whatsapp'              => 'required', 
            'email'                 => 'required', 
            'afiliado'              => 'required', 
            'posicion'              => 'required',
            'estado_id'             => 'required'
        ];

        if(!$this->validate($reglas)){
            $session->setFlashdata('mensaje', 'Error(s) en formulario');
            return redirect()->back()->withInput();
        } else {
            $post = $this->request->getPost(['afiliado_id', 'nombre', 'apellidos', 'genero', 'cedula', 'estado_id', 'municipio_id', 'departamento_id', 'tipo_doc', 'numero_doc', 'expedicion_doc', 'ciudad', 'pais', 'whatsapp', 'email', 'afiliado', 'cargo', 'posicion']);
            if($post['afiliado']) {$afiliado = 1;} else {$afiliado = 0;};
            if($post['cargo']) {$cargo = 1;} else {$cargo = 0;};
            $data = [
                'nombre'                => $post['nombre'],
                'apellidos'             => $post['apellidos'],
                //'fecha_nacimiento'      => $post['fecha_nacimiento'],
                'genero'                => $post['genero'],
                'cedula'                => $post['cedula'],
                'municipio_id'          => $post['municipio_id'],
                'departamento_id'       => $post['departamento_id'],
                'tipo_doc'              => $post['tipo_doc'],
                'numero_doc'            => $post['numero_doc'],
                'expedicion_doc'        => $post['expedicion_doc'],
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
        $file = $this->request->getFile('cedula_img');
        
        if(!$file->isValid()) {
            // echo $file->getErrorString();
            $session->setFlashdata('mensaje', 'No se ha cargado ninguna imagen');
            return redirect()->back()->withInput();
        };
        if(!$file->hasMoved()) { // si el archivo todavia no se ha movido, se fuerza a moverse a su ubicacion temporal writeable/uploads
            $solicitud = $this->solicitudesModel->find($id);
            $apellidosMasFoto = $solicitud['apellidos'] . ' - ' . $file->getName();
            $ruta = ROOTPATH . 'public/img/cedulas' . DIRECTORY_SEPARATOR; // fija la ruta para guardar/mover en disco a su ubicacion definitiva (public)
            $file->move($ruta, $apellidosMasFoto, true); // mueve el fichero de la carpeta temporal a su ubicacion definitiva
            $url = base_url() . 'public/img/cedulas/' . $apellidosMasFoto; // consigue la url para guardarla en el registro y verla en html
        };
        $data = ['cedula_img' => $url];
        $this->solicitudesModel->update($id, $data, false);
        return redirect()->back()->withInput();
        $session->setFlashdata('mensaje', 'Imagen actualizada');
    }








    public function update_fecha_nacimiento($id)
    {
        $session = session();
        $post = $this->request->getPost(['fecha_nacimiento']);
        $data = ['fecha_nacimiento' => $post['fecha_nacimiento']];
        $this->solicitudesModel->update($id, $data, false);
        return redirect()->back()->withInput();
        $session->setFlashdata('mensaje', 'Fecha actualizada');






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
