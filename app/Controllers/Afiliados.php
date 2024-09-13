<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\AfiliadosModel;
use App\Models\SolicitudesModel;
use App\Models\EstadosModel;
use App\Models\DepartamentosModel;
use App\Models\MunicipiosModel;
use CodeIgniter\Shield\Models\UserModel;

use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;
use App\Models\GeoNivel2Model;


class Afiliados extends ResourceController
{


    private $db;
    private $solicitudesModel;
    private $afiliadosModel;
    private $estadosModel;
    private $departamentosModel;
    private $municipiosModel;
    private $userModel;
    private $paisResidenciaModel;
    private $geoNivel1Model;
    private $geoNivel2Model;



    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->solicitudesModel = new SolicitudesModel();
        $this->afiliadosModel = new AfiliadosModel();
        $this->estadosModel = new EstadosModel();
        $this->departamentosModel = new DepartamentosModel();
        $this->municipiosModel = new MunicipiosModel();
        $this->userModel = new UserModel();
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
            'titulo' => 'Afiliaciones'
        ];
        return view('afiliados/index', $data);
    }






    public function listar_afiliados()
    {
        $builder = $this->db->table('afiliados')
        ->select('
            afiliados.id, 
            users.username AS user, 
            afiliados.solicitud_id, 
            afiliados.afiliado_id, 
            afiliados.nombre, 
            afiliados.apellidos, 
            (YEAR(NOW()) - YEAR(afiliados.fecha_nacimiento)) AS edad,
            afiliados.genero, 
            afiliados.cedula, 
            pais_residencia.nombre AS pais,
            geo_nivel1.nombre AS nivel1,
            geo_nivel2.nombre AS nivel2,
            afiliados.created_at,
            afiliados.updated_at,
            afiliados.deleted_at
        ')
        ->join('pais_residencia', 'pais_residencia.codigo = afiliados.pais_residencia_codigo')
        ->join('geo_nivel1', 'geo_nivel1.codigo = afiliados.geo_nivel1_codigo')
        ->join('geo_nivel2', 'geo_nivel2.codigo = afiliados.geo_nivel2_codigo')
        ->join('users', 'users.id = afiliados.user_id');
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
        //
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
        $departamentos = $this->departamentosModel->findAll();
        $municipios = $this->municipiosModel->findAll();

        $paisesResidencia = $this->paisResidenciaModel->findAll();
        $geoNivel1 = $this->geoNivel1Model->findAll();
        $geoNivel2 = $this->geoNivel2Model->findAll();

        $afiliado = $this->afiliadosModel->find($id);
        $user = $this->userModel->find($afiliado['user_id']);
        $edad = strtotime(date('Y-m-d')) - strtotime($afiliado['fecha_nacimiento']);
        $data = [
            'titulo'                => 'Solicitud',
            'id'                    => $id,
            'afiliado'              => $afiliado,
            'paisesResidencia'      => $paisesResidencia,
            'geoNiveles1'           => $geoNivel1,
            'geoNiveles2'           => $geoNivel2,
            'edad'                  => $edad,
            'estados'               => $estados,
            'departamentos'         => $departamentos,
            'municipios'            => $municipios,
            'user'                  => $user
        ];
        return view('afiliados/edit', $data);
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
            //'afiliado'              => 'required', 
            //'posicion'              => 'required',
            //'estado_id'             => 'required'
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
                
            $this->afiliadosModel->update($id, $data, false);
            $session->setFlashdata('mensaje', 'Afiliacion actualizada');
            return redirect('afiliados');
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
            $afiliado = $this->afiliadosModel->find($id);
            $apellidosMasFoto = $afiliado['apellidos'] . ' - ' . $file->getName();
            $ruta = ROOTPATH . 'public/img/cedulas' . DIRECTORY_SEPARATOR; // fija la ruta para guardar/mover en disco a su ubicacion definitiva (public)
            $file->move($ruta, $apellidosMasFoto, true); // mueve el fichero de la carpeta temporal a su ubicacion definitiva
            $url = base_url() . 'public/img/cedulas/' . $apellidosMasFoto; // consigue la url para guardarla en el registro y verla en html
        };
        $data = ['cedula_img' => $url];
        $this->afiliadosModel->update($id, $data, false);
        return redirect()->back()->withInput();
        $session->setFlashdata('mensaje', 'Imagen actualizada');
    }






    



    public function update_fecha_nacimiento($id)
    {
        $session = session();
        $post = $this->request->getPost(['fecha_nacimiento']);
        $data = ['fecha_nacimiento' => $post['fecha_nacimiento']];
        $this->afiliadosModel->update($id, $data, false);
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
