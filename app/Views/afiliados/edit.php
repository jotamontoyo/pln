<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>




<div style="background-color: #E0ECF8;">

  <div class="container">

    <br>
    <br>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="container-breadcrumb breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
          <li class="breadcrumb-item">
            <a href=<?= base_url(); ?> style="color: red;">
              <i class="bi bi-house-fill"></i>
              Inicio
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href=<?= base_url('afiliados'); ?> style="color: red;">
              Afiliaciones
            </a>
          </li>
          <li class="breadcrumb-item" style="color: red;">Edición afiliación nº: <?= $afiliado['id']; ?></li>
        </ol>
      </nav>
    </div>


    <div class="row">

      <div class="col-sm-2 col-md-2 col-lg-1 col-xl-1 col-xxl-1">
        <a href="<?= base_url('solicitudes/' . $afiliado['solicitud_id'] . '/edit') ?>">
          <button type="button" class="btn btn-sm btn-primary boton-badge">
            Solicitud de afiliación <span class="badge text-bg-secondary"><?= $afiliado['solicitud_id'] ?></span>
          </button>
        </a>
      </div>

      <div class="col-sm-2 col-md-2 col-lg-1 col-xl-1 col-xxl-1">
        <a href="<?= base_url('users/' . $user->id . '/edit') ?>">
          <button type="button" class="btn btn-sm btn-primary boton-badge">
            Creado por <span class="badge text-bg-secondary"><?= $user->username ?></span>
          </button>
        </a>
      </div>

    </div>


    <form action="<?= base_url('afiliados/' . $id); ?>" method="POST" name="edit_form" enctype="multipart/form-data" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

        <hr class="my-4">
        <div class="row g-3">

            <h5>Datos personales</h5>

            <div class="row">

              <div class="col-sm-2 form-floating">
                <input type="text" class="form-control" id="solicitud_doc" name="solicitud_doc" value="<?= $afiliado['afiliado_id'] ?>" placeholder="Nº de afiliado">
                <label for="solicitud_doc">Nº de afiliado</label>
              </div>

              <div class="col-sm-4 form-floating">
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $afiliado['nombre']; ?>" placeholder="Nombre">
                <label for="nombre">Nombre*</label>
                <p class="small" style="color:red">
                  <?= validation_show_error('nombre'); ?>
                </p>
              </div>

              <div class="col-sm-6 form-floating">
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $afiliado['apellidos']; ?>" placeholder="Apellidos">
                <label for="apellidos">Apellidos*</label>
                <p class="small" style="color:red">
                  <?= validation_show_error('apellidos'); ?>
                </p>
              </div>

            </div>


            <div class="col-sm-2 form-floating">
              <a data-bs-toggle="modal" data-bs-target="#cambiarFechaNacimiento">
                <label for="fecha_nacimiento">Fecha de nacimiento*</label>
                <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= $afiliado['fecha_nacimiento']; ?>" placeholder="Fecha de nacimiento*">
              </a>
              <p class="small" style="color:red">
                <?= validation_show_error('fecha_nacimiento'); ?>
              </p>              
            </div>



            <div class="col-sm-1 form-floating">
              <input readonly type="text" class="form-control" name="edad" id="edad" value="" placeholder="Edad">
              <label for="edad">Edad</label>
              <p class="small" style="color:red">
                <?= validation_show_error('edad'); ?>
              </p>              
            </div>



            <div class="col-sm-2 form-floating">
              <select class="form-select" id="genero" name="genero" placeholder="Género*">
                <option value=""></option>
                <option value="Masculino" <?= ($afiliado['genero'] == 'Masculino') ? 'selected' : '';?>>Masculino</option>
                <option value="Femenino" <?= ($afiliado['genero'] == 'Femenino') ? 'selected' : '';?>>Femenino</option>
              </select>
              <label for="genero">Género*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('genero'); ?>
              </p>
            </div>

            

            






            <div class="col-sm-2">

                <div class="clear-fix">
                  <label class="float-start" for="paisResidencia">&nbsp; País de residencia*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#paisResidenciaModal">
                    <img src="<?= base_url(); ?>public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="paisResidencia" name="paisResidencia">
                  <option value=""></option>
                  <?php foreach($paisesResidencia as $paisResidencia): ?>
                    <option value="<?= $paisResidencia['codigo'] ?>" 
                      <?= ($paisResidencia['codigo'] == $afiliado['pais_residencia_codigo']) ? 'selected' : '';?>>
                      <?= $paisResidencia['nombre'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('paisResidencia'); ?>
                </p>

              </div>



              <div class="col-sm-2" id="geo-nivel1-panel" name="geo-nivel1-panel">

                <div class="clear-fix">
                  <label class="float-start" id="geoNivel1Label" for="geoNivel1">&nbsp;</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#">
                    <img src="<?= base_url(); ?>public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="geoNivel1" name="geoNivel1">
                    <option value=""></option>
                    <?php foreach($geoNiveles1 as $geoNivel1): ?>
                      <option value="<?= $geoNivel1['codigo'] ?>" data-pais="<?= $geoNivel1['pais_residencia_codigo'] ?>"
                        <?= ($geoNivel1['codigo'] == $afiliado['geo_nivel1_codigo']) ? 'selected' : '';?>>
                        <?= $geoNivel1['nombre'] ?>
                      </option>
                    <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('geoNivel1'); ?>
                </p>
                
              </div>



              <div class="col-sm-2" id="geo-nivel2-panel" name="geo-nivel2-panel">

                <div class="clear-fix">
                  <label class="float-start" id="geoNivel2Label" for="geoNivel2">&nbsp;</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#">
                    <img src="<?= base_url(); ?>public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="geoNivel2" name="geoNivel2">
                    <option value=""></option>
                    <?php foreach($geoNiveles2 as $geoNivel2): ?>
                      <option value="<?= $geoNivel2['codigo'] ?>" data-geonivel2="<?= $geoNivel2['geo_nivel1_codigo'] ?>"
                        <?= ($geoNivel2['codigo'] == $afiliado['geo_nivel2_codigo']) ? 'selected' : '';?>>
                        <?= $geoNivel2['nombre'] ?>
                      </option>
                    <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('geoNivel2'); ?>
                </p>
                
              </div>
























            <div class="col-sm-2 form-floating" hidden>
                    <select class="form-select" id="estado_id" name="estado_id" placeholder="Residencia">
                        <?php foreach($estados as $estado): ?>
                          <option value="<?= $estado['id'] ?>" 
                              <?= ($estado['id'] == $afiliado['estado_id']) ? 'selected' : '';?>>
                              <?= $estado['nombre'] ?>
                          </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="estado_id">Residencia*</label>
                    <p class="small" style="color:red">
                        <?= validation_show_error('estado_id'); ?>
                    </p>
            </div>
            
            
        
            <div class="col-sm-2 form-floating" hidden>
              
              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $afiliado['ciudad']; ?>" placeholder="Ciudad/Municipio*">
              <label for="ciudad">Ciudad/Municipio*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('ciudad'); ?>
              </p>
            </div>

            <div class="col-sm-3 form-floating" hidden>
              <input type="text" class="form-control" id="pais" name="pais" value="<?= $afiliado['pais']; ?>" placeholder="Estado, Región, Comunidad, Dpto*">
              <label for="pais">Estado, Región, Comunidad, Dpto*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pais'); ?>
              </p>
            </div>






            
            <hr class="my-4">
            <h5>Identificación</h5> 

            
            <!-- campos solo para la cedula -->
            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $afiliado['cedula']; ?>" placeholder="Cédula">
              <label for="cedula">Cédula Nº</label>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating" id="departamento_id_panel" name="departamento_id_panel">
              <select class="form-select" id="departamento_id" name="departamento_id">
                <option value=""></option>
                <?php foreach($departamentos as $departamento): ?>
                  <option value="<?= $departamento['codigo'] ?>" 
                    <?= ($departamento['codigo'] == $afiliado['departamento_id']) ? 'selected' : '';?>>
                      <?= $departamento['nombre'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <label for="estado_id">Departamento de expedición*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('departamento_id'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating" id="municipio_id_panel" name="municipio_id_panel">
              <select class="form-select" id="municipio_id" name="municipio_id">
                <option value=""></option>
                <?php foreach($municipios as $municipio): ?>
                  <option value="<?= $municipio['codigo'] ?>" data-departamento="<?= $municipio['departamento_codigo'] ?>"
                    <?= ($municipio['codigo'] == $afiliado['municipio_id']) ? 'selected' : '';?>>
                      <?= $municipio['nombre'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <label for="estado_id">Municipio de expedición*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('municipio_id'); ?>
              </p>
            </div>
            <!-- FIN campos solo para la cedula -->

            







            <!-- campos para cuando no hay cedula -->
            <div class="col-sm-2 form-floating">
              <select class="form-select" id="tipo_doc" name="tipo_doc" placeholder="Tipo documento*">
                <option value=""></option>
                <option value="Pasaporte" <?= ($afiliado['tipo_doc'] == 'Pasaporte') ? 'selected' : '';?>>Pasaporte</option>
                <option value="Licencia" <?= ($afiliado['tipo_doc'] == 'Licencia') ? 'selected' : '';?>>Licencia</option>
                <option value="Residencia" <?= ($afiliado['tipo_doc'] == 'Residencia') ? 'selected' : '';?>>Residencia</option>
              </select>
              <label for="genero">Tipo documento*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('genero'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating" id="numero_doc_panel" name="numero_doc_panel">
              <input type="text" class="form-control" id="numero_doc" name="numero_doc" value="<?= $afiliado['numero_doc']; ?>" placeholder="Nº documento">
              <label for="numero_doc" class="form-label">Nº documento</label>
              <p class="small" style="color:red">
                <?= validation_show_error('numero_doc'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating" id="expedicion_doc_panel" name="expedicion_doc_panel">
              <input type="text" class="form-control" id="expedicion_doc" name="expedicion_doc" value="<?= $afiliado['expedicion_doc']; ?>" placeholder="Lugar de expedición">
              <label for="expedicion_doc" class="form-label">Lugar de expedición</label>
              <p class="small" style="color:red">
                <?= validation_show_error('expedicion_doc'); ?>
              </p>
            </div>
            <!-- FIN campos para cuando no hay cedula -->


            <div class="col-sm-4">
              <label for="cedula_img" class="form-label">Cédula imagen:</label><br>
                  <button type="button" class="btn" id="bCambiarImg" data-bs-toggle="modal" data-bs-target="#cambiarImg">
                    <div class="card shadow-sm">
                      <img src="<?= $afiliado['cedula_img']; ?>" id="cedula_img_form" name="cedula_img_form" alt="">
                    </div>
                  </button>
                <p style="display: inline-block; font-size: 10px"><?= $afiliado['cedula_img']; ?></p> 
            </div>





            <hr class="my-4">
            <h5>Datos de contacto</h5>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $afiliado['whatsapp']; ?>" placeholder="Whatsapp">
              <label for="whatsapp">Whatsapp</label>
              <p class="small" style="color:red">
                <?= validation_show_error('whatsapp'); ?>
              </p>
            </div>

            <div class="col-sm-4 form-floating">
              <input type="email" class="form-control" id="email" name="email" value="<?= $afiliado['email']; ?>" placeholder="Email">
              <label for="email">Email</label>
              <p class="small" style="color:red">
                <?= validation_show_error('email'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Tipo de participación</h5>
            


            <div class="form-check">
              <input class="form-check-input checkbox" type="checkbox" id="afiliado" name="afiliado" value="<?= $afiliado['afiliado']; ?>">
              <label class="form-check-label" for="flexCheckDefault">
                Afiliado
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input checkbox" type="checkbox"id="cargo" name="cargo" value="<?= $afiliado['cargo']; ?>">
              <label class="form-check-label" for="flexCheckChecked">
                Cargo
              </label>
            </div>






            <div class="col-sm-4 form-floating">
              <input type="text" class="form-control" id="posicion" name="posicion" value="<?= $afiliado['posicion']; ?>" placeholder="Posición">
              <label for="posicion">Posición:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('posicion'); ?>
              </p>
            </div>

          </div>

        <br><br>

        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> Guardar</button>
            <a href="<?= base_url(); ?>afiliados"><button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-x-lg"></i> Cancelar</button></a>
        </div>

        <br>

    </form>

  </div>

</div>

<br>




<!-- Modal formulario para cambio de cedula_img -->
<div class="modal fade" id="cambiarImg" tabindex="-1" aria-labelledby="cambiarImglLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cambiarImglLabel">Cambio de imagen</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="centrado">
          <p>Imagen actual</p>
          <img src="<?= $afiliado['cedula_img']; ?>" style="max-width: 400px;" alt="">
        </div>
        <br>
        <form action="<?= base_url('afiliados/' . $id . '/img'); ?>" method="POST" name="edit_form" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" name="_method" value="PUT">
          <?= csrf_field(); ?>
          <div class="row g-3">
            <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" id="cedula_img" name="cedula_img" value="<?= $afiliado['cedula_img']; ?>">
            <p class="small" style="color:red">
              <?= validation_show_error('cedula_img'); ?>
            </p>
          </div>
          <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> Guardar</button>
            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal"> Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal formulario cambiar fecha nacimiento -->
<div class="modal fade" id="cambiarFechaNacimiento" tabindex="-1" aria-labelledby="cambiarFechaNacimientoImglLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cambiarFechaNacimientoImglLabel">Cambiar Fecha de Nacimiento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('afiliados/' . $id . '/fecha_nacimiento'); ?>" method="POST" name="edit_form" autocomplete="off">
          <input type="hidden" name="_method" value="PUT">
          <?= csrf_field(); ?>
          <div class="row g-3">
            <div class="col-sm-6 centrar_div">
              <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= set_value('fecha_nacimiento'); ?>" placeholder="Fecha de nacimiento*">
              <p class="small" style="color:red">
                <?= validation_show_error('fecha_nacimiento'); ?>
              </p>
            </div>
          </div>
          <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> Guardar</button>
            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal"> Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>









<script>



  $(".checkbox").on('change', function() {
    if ($(this).is(':checked')) {
      $(this).attr('value', 'true');
      var check = $(this).val();
    } else {
      $(this).attr('value', 'false');
      var check = $(this).val();
    }
  });


  // para cuando se carga la pagina activar el check si procede
  $(document).ready(function () {
    var afiliado = document.getElementById("afiliado").value;
    if(afiliado == 1) {
      //console.log('true');
      $("#afiliado").prop('checked', true);
    } else {
      //console.log('false');
      $("#afiliado").prop('checked', false);
    };
  });



  // para cuando se carga la pagina activar el check si procede
  $(document).ready(function () {
    var cargo = document.getElementById("cargo").value;
    if(cargo == 1) {
      $("#cargo").prop('checked', true);
    } else {
      $("#cargo").prop('checked', false);
    };
  });


  // calculo de la edad segun su fecha de nacimiento
  $(document).ready(function () {
    const fecha_actual = new Date();
    const fecha_nacimiento = new Date($("#fecha_nacimiento").val()); 
    const año_actual = fecha_actual.getFullYear();
    const año_nacimiento = fecha_nacimiento.getFullYear();
    var edad = año_actual - año_nacimiento;
    document.getElementById("edad").value = edad;
  });


  


</script>




<?= $this->endSection(); ?>

<?php $this->section('scripts') ?>

<?= $this->endSection(); ?>
