<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>




<?= $this->include('cabecera'); ?> 


<br>
<div class="row">



          <div class="col-sm-4" style="margin-top: -115px;">
            <nav class="navbar navbar-expand-md navbar-dark centrado">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Menú
              </button>
              <div class="collapse navbar-collapse navbar-menu" id="navbarCollapse">
                <ul class="navbar-nav">
                  <div>
                    <?= $this->include('botones-menu'); ?>
                  </div>
                </ul>
              </div>
            </nav>
          </div>






<!-- formulario solicitud afilicacion  fondo azul-> style="background-color: #E0ECF8;" -->
  <div class="col-sm-8">

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
            <a href=<?= base_url('formularios/solicitud-afiliacion'); ?> style="color: red;">
              Solicitud de afiliación
            </a>
          </li>
        </ol>
      </nav>
    </div>



    <div id="formulario_solicitud" name="formulario_solicitud">

      <div class="container">

          <br>
          <h4 class="mb-3 text-center">Solicitud de afiliación</h4>

          <hr>
          <h5>Datos personales</h5>
          <br>

          <form action="<?= base_url('solicitudes/crear') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="POST">
            <?= csrf_field(); ?>

            <div class="row g-2">


              <br>

            
              <div class="col-sm-5">

                <label for="nombre">&nbsp; Nombre*</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('nombre'); ?>
                </p>

              </div>
              
              

              <div class="col-sm-5">
                <label for="apellidos">&nbsp; Apellidos*</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= set_value('apellidos'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('apellidos'); ?>
                </p>

              </div>




              




              


              <div class="col-sm-2">

                <div class="clear-fix">
                  <label class="float-start" for="fecha_nacimiento">&nbsp; Fecha de nacimiento*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#fechaNacimientoModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= set_value('fecha_nacimiento'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('fecha_nacimiento'); ?>
                </p>      

              </div>




              <div class="col-sm-2">
                
                <div class="clear-fix">
                  <label class="float-start" for="genero">&nbsp; Género*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#generoModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="genero" name="genero">
                  <option value=""></option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                </select>
                <p class="small" style="color:red">
                  <?= validation_show_error('genero'); ?>
                </p>

              </div>








              <!-- <div class="col-sm-2">

                <div class="clear-fix">
                  <label class="float-start" for="estado_id">&nbsp; País de residencia*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#paisResidenciaModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="estado_id" name="estado_id">
                  <option value=""></option>
                  <?php foreach($estados as $estado): ?>
                    <option value="<?= $estado['id'] ?>"><?= $estado['nombre'] ?></option>
                  <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">

                </p>
              </div> -->

              





            

              








              


              <!-- <div class="col-sm-2" id="pais_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" id="pais_label" for="pais" hidden></label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#estadoResidenciaModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="pais" name="pais" value="<?= set_value('pais'); ?>">
                <label for="pais" class="form-label" id="pais_label" hidden></label>
                <p class="small" style="color:red">

                </p>
              </div> -->


              <!-- solo se activa cuando el pais de residencia es eeuu
              <div class="col-sm-2" id="pais_panel_eeuu" hidden>

                <div class="clear-fix">
                  <label class="float-start" id="pais_label_eeuu" for="pais" hidden></label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#estadoResidenciaModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="pais" name="pais">
                  <option value=""></option>
                  <option value="Alabama">Alabama</option>
                  <option value="Alaska">Alaska</option>
                  <option value="Arizona">Arizona</option>
                  <option value="Arkansas">Arkansas</option>
                  <option value="California">California</option>
                  <option value="Carolina del Norte">Carolina del Norte</option>
                  <option value="Carolina del Sur">Carolina del Sur</option>
                  <option value="Colorado">Colorado</option>
                  <option value="Connecticut">Connecticut</option>
                  <option value="Dakota del Norte">Dakota del Norte</option>
                  <option value="Dakota del Sur">Dakota del Sur</option>
                  <option value="Delaware">Delaware</option>
                  <option value="Florida">Florida</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Hawái">Hawái</option>
                  <option value="Idaho">Idaho</option>
                  <option value="Illinois">Illinois</option>
                  <option value="Indiana">Indiana</option>
                  <option value="Iowa">Iowa</option>
                  <option value="Kansas">Kansas</option>
                  <option value="Kentucky">Kentucky</option>
                  <option value="Luisiana">Luisiana</option>
                  <option value="Maine">Maine</option>
                  <option value="Maryland">Maryland</option>
                  <option value="Massachusetts">Massachusetts</option>
                  <option value="Michigan">Michigan</option>
                  <option value="Minnesota">Minnesota</option>
                  <option value="Misisipi">Misisipi</option>
                  <option value="Misuri">Misuri</option>
                  <option value="Montana">Montana</option>
                  <option value="Nebraska">Nebraska</option>
                  <option value="Nevada">Nevada</option>
                  <option value="Nueva Jersey">Nueva Jersey</option>
                  <option value="Nueva York">Nueva York</option>
                  <option value="Nuevo Hampshire">Nuevo Hampshire</option>
                  <option value="Nuevo México">Nuevo México</option>
                  <option value="Ohio">Ohio</option>
                  <option value="Oklahoma">Oklahoma</option>
                  <option value="Oregón">Oregón</option>
                  <option value="Pensilvania">Pensilvania</option>
                  <option value="Rhode Island">Rhode Island</option>
                  <option value="Tennessee">Tennessee</option>
                  <option value="Texas">Texas</option>
                  <option value="Utah">Utah</option>
                  <option value="Vermont">Vermont</option>
                  <option value="Virginia">Virginia</option>
                  <option value="Virginia Occidental">Virginia Occidental</option>
                  <option value="Washington">Washington</option>
                  <option value="Wisconsin">Wisconsin</option>
                  <option value="Wyoming">Wyoming</option>
                </select>
                <p class="small" style="color:red">

                </p>
              </div>





              <div class="col-sm-2" id="ciudad_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" id="ciudad_label" for="ciudad" hidden></label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#ciudadResidenciaModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= set_value('ciudad'); ?>">
                <p class="small" style="color:red">

                </p>

              </div> -->













              <div class="col-sm-2">

                <div class="clear-fix">
                  <label class="float-start" for="paisResidencia">&nbsp; País de residencia*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#paisResidenciaModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="paisResidencia" name="paisResidencia">
                  <option value=""></option>
                  <?php foreach($paisesResidencia as $paisResidencia): ?>
                    <option value="<?= $paisResidencia['codigo'] ?>"><?= $paisResidencia['nombre'] ?></option>
                  <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('paisResidencia'); ?>
                </p>

              </div>



              <div class="col-sm-2" id="geo-nivel1-panel" name="geo-nivel1-panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" id="geoNivel1Label" for="geoNivel1">&nbsp;</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#municipioModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="geoNivel1" name="geoNivel1">
                    <option value=""></option>
                    <?php foreach($geoNiveles1 as $geoNivel1): ?>
                        <option value="<?= $geoNivel1['codigo'] ?>" data-paisnivel1="<?= $geoNivel1['pais_residencia_codigo'] ?>"><?= $geoNivel1['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('geoNivel1'); ?>
                </p>
                
              </div>



              <div class="col-sm-2" id="geo-nivel2-panel" name="geo-nivel2-panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" id="geoNivel2Label" for="geoNivel2">&nbsp;</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#municipioModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="geoNivel2" name="geoNivel2">
                    <option value=""></option>
                    <?php foreach($geoNiveles2 as $geoNivel2): ?>
                        <option value="<?= $geoNivel2['codigo'] ?>" data-geonivel2="<?= $geoNivel2['geo_nivel1_codigo'] ?>"><?= $geoNivel2['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('geoNivel2'); ?>
                </p>
                
              </div>




              





              <script>


                $(document).ready(function () {
                  $(function() {
                      $(document).on('change', '#paisResidencia', function() {
                        var pais_codigo = $(this).val();
                        console.log(pais_codigo);
                        $('#geoNivel1 option').each(function() {
                            var paisNivel1 = $(this).data('paisnivel1');
                            console.log(paisNivel1);
                            if (paisNivel1 == pais_codigo || $(this).val() == "") {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                        $('#geoNivel1').val('');
                        $('#geoNivel2').val('');
                      });
                  });
                });



                $(document).ready(function () {
                  $(function() {
                      $(document).on('change', '#geoNivel1', function() {
                        var nivel1_codigo = $(this).val();
                        console.log(nivel1_codigo);
                        $('#geoNivel2 option').each(function() {
                            var geonivel2 = $(this).data('geonivel2');
                            console.log(geonivel2);
                            if (geonivel2 == nivel1_codigo || $(this).val() == "") {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                        $('#geoNivel2').val('');
                      });
                  });
                });



              </script>





























              


              <hr class="my-4">
              <h5>Identificación</h5>

              

              <div class="col-sm-2">

                <div class="" id="tiene_cedula" hidden>

                  <label for="radio_tiene_cedula" class="col-form-label">
                    ¿Tiene cédula?*
                  </label>

                  <div class="clear-fix">

                    <div class="form-check float-start">
                      <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula">
                      <label class="form-check-label" for="radio_tiene_cedula">
                        Sí &nbsp; &nbsp;
                      </label>
                    </div>

                    <div class="form-check float-start">
                      <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula" >
                      <label class="form-check-label" for="radio_tiene_cedula">
                        No
                      </label>
                    </div>

                  </div>

                </div>

              </div>


              

              
















              <!-- campos solo para la cedula -->

              <div class="col-sm-2" id="cedula_panel" name="cedula_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="cedula">&nbsp; Cédula*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#cedulaModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="cedula" name="cedula" value="<?= set_value('cedula'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('cedula'); ?>
                </p>

              </div>





              <div class="col-sm-2" id="departamento_id_panel" name="departamento_id_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="departamento_id">&nbsp; Departamento*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#departamentoModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="departamento_id" name="departamento_id">
                    <option value=""></option>
                    <?php foreach($departamentos as $departamento): ?>
                        <option value="<?= $departamento['codigo'] ?>"><?= $departamento['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('departamento_id'); ?>
                </p>
              </div>




              <div class="col-sm-2" id="municipio_id_panel" name="municipio_id_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="municipio_id">&nbsp; Municipio*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#municipioModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="municipio_id" name="municipio_id">
                    <option value=""></option>
                    <?php foreach($municipios as $municipio): ?>
                        <option value="<?= $municipio['codigo'] ?>" data-departamento="<?= $municipio['departamento_codigo'] ?>"><?= $municipio['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
                <p class="small" style="color:red">
                    <?= validation_show_error('municipio_id'); ?>
                </p>
              </div>

              <!-- FIN campos solo para la cedula -->








              <!-- campos para cuando no hay cedula -->
              <div class="col-sm-2" id="tipo_doc_panel" name="tipo_doc_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="tipo_doc">&nbsp; Tipo documento*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#tipo_docModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <select class="form-select" id="tipo_doc" name="tipo_doc">
                  <option value=""></option>
                  <option value="Pasaporte">Pasaporte</option>
                  <option value="Licencia">Licencia</option>
                  <option value="Residencia">Residencia</option>
                </select>
                <p class="small" style="color:red">
                  <?= validation_show_error('tipo_doc'); ?>
                </p>

              </div>




              <div class="col-sm-2" id="numero_doc_panel" name="numero_doc_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="numero_doc">&nbsp; Nº documento*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#numero_docModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="numero_doc" name="numero_doc" value="<?= set_value('numero_doc'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('numero_doc'); ?>
                </p>

              </div>




              <div class="col-sm-2" id="expedicion_doc_panel" name="expedicion_doc_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="expedicion_doc">&nbsp; Lugar de expedición*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#expedicion_docModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="expedicion_doc" name="expedicion_doc" value="<?= set_value('expedicion_doc'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('expedicion_doc'); ?>
                </p>

              </div>
              <!-- FIN campos para cuando no hay cedula -->













              
              <!-- <div class="col-sm-3" id="cedula_img_panel" name="cedula_img_panel" hidden>

                <div class="clear-fix">
                  <label class="float-start" for="cedula_img">&nbsp; Imagen*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#imagenModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="file" class="form-control" id="cedula_img" name="cedula_img" accept="image/jpeg, image/jpg, image/png" value="<?= set_value('cedula_img'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('cedula_img'); ?>
                </p>
              </div> -->

              





              <hr class="my-4">
              <h5>Datos de contacto</h5>






              <div class="col-sm-2">

                <div class="clear-fix">
                  <label class="float-start" for="whatsapp">&nbsp; WhatsApp Nº*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#whatsappModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= set_value('whatsapp'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('whatsapp'); ?>
                </p>

              </div>





              <div class="col-sm-4">

                <div class="clear-fix">
                  <label class="float-start" for="email">&nbsp; Email*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#emailModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('email'); ?>
                </p>

              </div>





              <hr class="my-4">
              <!-- <h5>Tipo de participación</h5>


              <div class="row">

                <div class="col-sm-2 clear-fix">
                      
                  <div class="form-check float-start">
                    <input class="form-check-input" type="checkbox" id="afiliado" name="afiliado" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      Afiliado
                    </label>
                    <p class="small" style="color:red">
                      <?= validation_show_error('afiliado'); ?>
                    </p>
                  </div>
                      
                      
                  <div class="form-check float-end">
                    <input class="form-check-input" type="checkbox" id="cargo" name="cargo">
                    <label class="form-check-label" for="flexCheckChecked">
                      Cargo
                    </label>
                    <p class="small" style="color:red">
                      <?= validation_show_error('cargo'); ?>
                    </p>
                  </div>
                      
                </div>

              </div> -->






              <!-- <div class="col-sm-4">

                <div class="clear-fix">
                  <label class="float-start" for="posicion">&nbsp; Posición*</label>
                  <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#posicionModal">
                    <img src="..\public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                  </a>
                </div>

                <input type="text" class="form-control" id="posicion" name="posicion" value="<?= set_value('posicion'); ?>">
                <p class="small" style="color:red">
                  <?= validation_show_error('posicion'); ?>
                </p>

              </div> -->
              
            </div>




            <div class="centrado">
              <br>              
              <button onclick="activar_spinner()" class="btn btn-primary btn-lg sombra" type="submit" id="bSubmit" name="bSubmit">
                <div>
                  <div class="spinner-border spinner-border-sm centrado" id="spinner" role="status" hidden>
                </div>
                <i class="bi bi-send" id="ico-enviar"></i>
                <span id="texto-bSubmit"> Enviar solicitud</span>
              </button>
            </div>
            <br>

            <br>
          </form>

      </div>

    
    </div>


  </div>

  


</div>



<script>
  function activar_spinner() {
    $("#ico-enviar").prop('hidden', true);
    $('#texto-bSubmit').html("Enviando solicitud..."); 
    //Al hacer click en el botón se muestra el spinner
    //$("#spinner").show("slow");
    $('#spinner').prop('hidden', false)
    //En cinco segundos se oculta el spinner y se muestra la tabla
    setTimeout(() => {
      $("#spinner").hide("slow");
      //$("#tabla").html('<table border="1"><tr><td>1</td><td>2</td></tr></table>');
    }, "5000");
  };
</script>




<!-- fechaNacimientoModal -->
  <div class="modal fade" id="fechaNacimientoModal" tabindex="-1" aria-labelledby="fechaNacimientoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Seleccione o escriba aquí su fecha de nacimiento.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




<!-- generoModal -->
  <div class="modal fade" id="generoModal" tabindex="-1" aria-labelledby="generoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Seleccione la opción que corresponda.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




<!-- paisResidenciaModal -->
  <div class="modal fade" id="paisResidenciaModal" tabindex="-1" aria-labelledby="paisResidenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Seleccione el país donde reside habitualmente.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




<!-- ciudadResidenciaModal (departmaneto, provincia....) -->
  <div class="modal fade" id="ciudadResidenciaModal" tabindex="-1" aria-labelledby="ciudadResidenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Escriba la opción que corresponda.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




  <!-- estadoResidenciaModal (municipio, estado) -->
  <div class="modal fade" id="estadoResidenciaModal" tabindex="-1" aria-labelledby="estadoResidenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Escriba la opción que corresponda.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>







<!-- cedulaModal -->
  <div class="modal fade" id="cedulaModal" tabindex="-1" aria-labelledby="cedulaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Introduzca aquí el número de cédula tal y como está en su documento.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>



<!-- departamentoModal -->
  <div class="modal fade" id="departamentoModal" tabindex="-1" aria-labelledby="departamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione de la lista el departamento donde se expidió la cédula.</p>
            </div>

        </div>
      </div>
    </div>
  </div>



 <!-- municipioModal -->
  <div class="modal fade" id="municipioModal" tabindex="-1" aria-labelledby="municipioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione de la lista el municipio donde se expidió la cédula.</p>
            </div>

        </div>
      </div>
    </div>
  </div>



<!-- imagenModal -->
  <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione de sus archivos una imagen del documento. Formatos autorizados: jpg, jpeg y png.</p>
            </div>

        </div>
      </div>
    </div>
  </div>




<!-- tipo_docModal -->
  <div class="modal fade" id="tipo_docModal" tabindex="-1" aria-labelledby="tipo_docModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione el tipo de documento con el que quiere identificarse en caso de no tener cédula.</p>
            </div>

        </div>
      </div>
    </div>
  </div>





<!-- numero_docModal -->
  <div class="modal fade" id="numero_docModal" tabindex="-1" aria-labelledby="numero_docModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Escriba aquí el número del documento con el que se identifica.</p>
            </div>

        </div>
      </div>
    </div>
  </div>




<!-- expedicion_docModal -->
  <div class="modal fade" id="expedicion_docModal" tabindex="-1" aria-labelledby="expedicion_docModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Escriba aquí el país donde se expidió el documento con el que se identifica.</p>
            </div>

        </div>
      </div>
    </div>
  </div>




<script>

      
  $(document).ready(function () {


    $(".checkbox").on('change', function() {
      if ($(this).is(':checked')) {
        $(this).attr('value', 'true');
        var check = $(this).val();
        //console.log(check);
        //$('#afiliado value').val(check);
        //console.log($('#afiliado').val(check));
      } else {
        $(this).attr('value', 'false');
        var check = $(this).val();
        //console.log(check);
        //$('#afiliado').val(check);
        //console.log($('#afiliado').val(check));
      }
    });



    $(document).on('change','#paisResidencia',function() {
      var pais = document.getElementById("paisResidencia").value;

      if(pais == 50 | pais == 54) { 
        $('#geoNivel1Label').html("&nbsp; Departamento*"); 
        $('#geoNivel2Label').html("&nbsp; Municipio*");  
      };

      if(pais == 51 | pais == 53) { 
        $('#geoNivel1Label').html("&nbsp; Estado*"); 
        $('#geoNivel2Label').html("&nbsp; Ciudad*");  
      };

      if(pais == 52) { 
        $('#geoNivel1Label').html("&nbsp; Comunidad*"); 
        $('#geoNivel2Label').html("&nbsp; Provincia*");  
      };

      $("#cedula_img").prop('hidden', false);
      $("#cedula_img_panel").prop('hidden', false);
      //$("#cedula_panel").prop('hidden', false);
      $("#tiene_cedula").prop('hidden', false);
      //$("#departamento_id_panel").prop('hidden', false);
      //$("#municipio_id_panel").prop('hidden', false);
      $("#geo-nivel1-panel").prop('hidden', false);
      //$("#ciudad_label").prop('hidden', false);
      $("#geo-nivel2-panel").prop('hidden', false);
      //$("#pais_label").prop('hidden', false);

      /*if(pais == 2) { 
        $("#pais_panel").prop('hidden', true);
        $("#pais_label").prop('hidden', true);
        $("#pais_panel_eeuu").prop('hidden', false);
        $("#pais_label_eeuu").prop('hidden', false);
      } else {
        $("#pais_panel").prop('hidden', false);
        $("#pais_label").prop('hidden', false);
        $("#pais_panel_eeuu").prop('hidden', true);
        $("#pais_label_eeuu").prop('hidden', true);
      }; */


    }); 



  

    // activa el campo nº de cedula
    $(document).on('click','#tiene_cedula',function() {
      var cedula = document.getElementById("radio_tiene_cedula").checked;
      if(cedula == false) {
        $("#cedula_panel").prop('hidden', true);
        $("#departamento_id_panel").prop('hidden', true);
        $("#municipio_id_panel").prop('hidden', true);
        $("#tipo_doc_panel").prop('hidden', false);
        $("#numero_doc_panel").prop('hidden', false);
        $("#expedicion_doc_panel").prop('hidden', false);
      } else {
        $("#cedula_panel").prop('hidden', false);
        $("#departamento_id_panel").prop('hidden', false);
        $("#municipio_id_panel").prop('hidden', false);
        $("#tipo_doc_panel").prop('hidden', true);
        $("#numero_doc_panel").prop('hidden', true);
        $("#expedicion_doc_panel").prop('hidden', true);
      };
    });
    






    // activa boton submit cuando hay un cambio
    /* $(".form-control, .form-select").on('change', function() {
      activarSubmit($(this));
    });
    function activarSubmit(obj){
      $("#bSubmit").prop('disabled', false);
    }; */
  





    /*$(document).on("change", '#cedula_img', function () {
      // Tamaño maximo del archivo
      const maxSize = 2000000; 
      // si no hay archivos, regresamos
      if (this.files.length <= 0) return;
      // Validamos el primer archivo únicamente
      const archivo = this.files[0];
      if (archivo.size > maxSize) {
          const tamanioEnMb = maxSize / 1000000;
          swal('Excede el tamaño de la imagen', `Máximo ${tamanioEnMb} MB`, 'error');
          // Limpiar
          document.getElementById("cedula_img").value = "";
      } else {
          // Validación pasada. Envía el formulario o haz lo que tengas que hacer
      }
    }); */


  });




</script>









<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>