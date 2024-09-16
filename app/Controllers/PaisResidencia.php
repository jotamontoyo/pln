<?php

namespace App\Controllers;


use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PaisResidenciaModel;
use \Hermawan\DataTables\DataTable;





class PaisResidencia extends BaseController
{


    private $db;
    private $paisResidenciaModel;


    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->paisResidenciaModel = new PaisResidenciaModel();
    }








    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'titulo' => 'Países de residencia'
        ];
        return view('pais-residencia/index', $data);
        
    }








    public function listar_paises()
    {
        //$this->db = db_connect();
        $builder = $this->db->table('pais_residencia')
        ->select('
            pais_residencia.id, 
            pais_residencia.codigo, 
            pais_residencia.nombre, 
            pais_residencia.label_nivel1, 
            pais_residencia.label_nivel2 
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
        $data = [
            'titulo' => 'Países de residencia'
        ];
        return view('pais-residencia/new', $data);
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
            'codigo'                        => 'required',
            'nombre'                        => 'required', 
            'label_nivel1'                  => 'required', 
            'label_nivel2'                  => 'required', 
        ];
        if(!$this->validate($reglas)){ //si no se cumplen las reglas
            $session->setFlashdata('mensaje', 'Error(s) en formulario'); //se imprimirá en el index
            //return redirect()->back()->withInput()->with('error', $this->validator->listErrors()); //muestra lista de errores
            return redirect()->back()->withInput(); //muestra lista de errores
        } else {
            $post = $this->request->getPost([
                'codigo', 
                'nombre',
                'label_nivel2',
                'label_nivel2' 
            ]);
            $data = [
                'codigo'                    => $post['codigo'],
                'nombre'                    => $post['nombre'],
                'label_nivel1'              => $post['label_nivel1'],
                'label_nivel2'              => $post['label_nivel2'],
            ];
            $this->paisResidenciaModel->insert($data, false);
            $session->setFlashdata('mensaje', 'País creado');
            return redirect('pais-residencia');
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
        $paisResidencia = $this->paisResidenciaModel->find($id);
        $data = [
            'titulo'                => 'Países de Residencia',
            'id'                    => $id,
            'paisResidencia'        => $paisResidencia
        ];
        return view('pais-residencia/edit', $data);
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
            'codigo'                => 'required', 
            'nombre'                => 'required',
            'label_nivel1'          => 'required',
            'label_nivel2'          => 'required',
        ];

        if(!$this->validate($reglas)){
            $session->setFlashdata('mensaje', 'Error(s) en formulario');
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        } else {
            $post = $this->request->getPost(['codigo', 'nombre', 'label_nivel1', 'label_nivel2']);
            $data = [
                'codigo'            => $post['codigo'],
                'nombre'            => $post['nombre'],
                'label_nivel1'      => $post['label_nivel1'],
                'label_nivel2'      => $post['label_nivel2']
            ];
                
            $this->paisResidenciaModel->update($id, $data, false);
            $session->setFlashdata('mensaje', 'País actualizado');
            return redirect('pais-residencia');
        }
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
