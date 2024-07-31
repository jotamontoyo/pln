<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>




<div style="background-color: #E0ECF8;">

  <div class="container">

    <br><br>
    <h4 class="mb-4 centrado">Editar solicitud #<?= $solicitud['id'];  ?></h4>


    <form action="<?= base_url('solicitudes/' . $id); ?>" method="POST" name="edit_form" enctype="multipart/form-data" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

        <hr class="my-4">
        <div class="row g-3">

            <h5>Datos personales</h5>

            <div class="col-sm-6 form-floating">
              <input type="text" class="form-control" id="afiliado_id" name="afiliado_id" value="<?= $solicitud['afiliado_id']; ?>" placeholder="Nº Afiliado">
              <label for="afiliado_id">Nº Afiliado*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('afiliado_id'); ?>
              </p>
            </div>

            <br>

            <div class="col-sm-6 form-floating">
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $solicitud['nombre']; ?>" placeholder="Nombre">
              <label for="nombre">Nombre*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
              </p>
            </div>

            <div class="col-sm-6 form-floating">
              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $solicitud['apellidos']; ?>" placeholder="Apellidos">
              <label for="apellidos">Apellidos*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('apellidos'); ?>
              </p>
            </div>


            <div class="col-sm-2 form-floating">
              <a data-bs-toggle="modal" data-bs-target="#cambiarFechaNacimiento">
              <label for="fecha_nacimiento">Fecha de nacimiento*</label>
                <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= $solicitud['fecha_nacimiento']; ?>" placeholder="Fecha de nacimiento*">
              </a>
              
              <p class="small" style="color:red">
                <?= validation_show_error('fecha_nacimiento'); ?>
              </p>              
            </div>

            <div class="col-sm-2 form-floating">
                <input readonly type="text" class="form-control" name="edad" id="edad" value="" placeholder="Edad">
                <label for="edad">Edad</label>
                <p class="small" style="color:red">
                  <?= validation_show_error('edad'); ?>
                </p>              
            </div>






            <div class="col-sm-2 form-floating">
                    <select class="form-select" id="estado_id" name="estado_id" placeholder="Residencia">
                        <?php foreach($estados as $estado): ?>
                          <option value="<?= $estado['id'] ?>" 
                              <?= ($estado['id'] == $solicitud['estado_id']) ? 'selected' : '';?>>
                              <?= $estado['nombre'] ?>
                          </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="estado_id">Residencia*</label>
                    <p class="small" style="color:red">
                        <?= validation_show_error('estado_id'); ?>
                    </p>
            </div>
            
            
        





            <div class="col-sm-3 form-floating">
              
              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $solicitud['ciudad']; ?>" placeholder="Ciudad">
              <label for="ciudad">Ciudad*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('ciudad'); ?>
              </p>
            </div>

            <div class="col-sm-3 form-floating">
              <input type="text" class="form-control" id="pais" name="pais" value="<?= $solicitud['pais']; ?>" placeholder="País">
              <label for="pais">País*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pais'); ?>
              </p>
            </div>

            <hr class="my-4">
            <h5>Identificación</h5>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $solicitud['cedula']; ?>" placeholder="Cédula">
              <label for="cedula">Cédula Nº</label>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>
            </div>

            <!-- estilos para la img tipo thumbnail de la cedula -->
            <style>
              #cedula_img_form {
                border: 1px solid #ddd; /* Gray border */
                border-radius: 4px;  /* Rounded border */
                /* padding: 5px; /* Some padding */
                width: 120px; /* Set a small width */
                height: 100px;
                background-image: url('public/img/logos/subir_img.png');
                background-repeat: no-repeat;
              }

              #bCambiarImg {
                padding: 0;
              }

              /* Add a hover effect (blue shadow) */
              img:hover {
                box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
              }
            </style>
            

            <div class="col-sm-4">
              <label for="cedula_img" class="form-label">Cédula imagen:</label><br>
                  <button type="button" class="btn" id="bCambiarImg" data-bs-toggle="modal" data-bs-target="#cambiarImg">
                    <div class="card shadow-sm">
                      <img src="<?= $solicitud['cedula_img']; ?>" id="cedula_img_form" name="cedula_img_form" alt="">
                    </div>
                  </button>
                <p style="display: inline-block; font-size: 10px"><?= $solicitud['cedula_img']; ?></p> 
            </div>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="pasaporte" name="pasaporte" value="<?= $solicitud['pasaporte']; ?>" placeholder="Pasaporte">
              <label for="pasaporte">Pasaporte*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pasaporte'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="licencia" name="licencia" value="<?= $solicitud['licencia']; ?>" placeholder="Licencia">
              <label for="licencia">Licencia*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('licencia'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="residencia" name="residencia" value="<?= $solicitud['residencia']; ?>" placeholder="Residencia">
              <label for="residencia">Residencia*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('residencia'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Datos de contacto</h5>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $solicitud['whatsapp']; ?>" placeholder="Whatsapp">
              <label for="whatsapp">Whatsapp</label>
              <p class="small" style="color:red">
                <?= validation_show_error('whatsapp'); ?>
              </p>
            </div>

            <div class="col-sm-4 form-floating">
              <input type="email" class="form-control" id="email" name="email" value="<?= $solicitud['email']; ?>" placeholder="Email">
              <label for="email">Email</label>
              <p class="small" style="color:red">
                <?= validation_show_error('email'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Tipo de participación</h5>
            


            <div class="form-check">
              <input class="form-check-input checkbox" type="checkbox" id="afiliado" name="afiliado" value="<?= $solicitud['afiliado']; ?>">
              <label class="form-check-label" for="flexCheckDefault">
                Afiliado
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input checkbox" type="checkbox"id="cargo" name="cargo" value="<?= $solicitud['cargo']; ?>">
              <label class="form-check-label" for="flexCheckChecked">
                Cargo
              </label>
            </div>






            <div class="col-sm-4 form-floating">
              <input type="text" class="form-control" id="posicion" name="posicion" value="<?= $solicitud['posicion']; ?>" placeholder="Posición">
              <label for="posicion">Posición:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('posicion'); ?>
              </p>
            </div>

          </div>

        <br><br>

        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
            
            <a href="<?= base_url(); ?>solicitudes"><button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-x-lg"></i> <?= lang('App.boton.cancelar') ?></button></a>
            <a href="<?= base_url('solicitudes/' . $id . '/afiliar') ?>">
              <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> Afiliar</button>
            </a>
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
        <h1 class="modal-title fs-5" id="cambiarImglLabel">Cédula</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('solicitudes/' . $id . '/img'); ?>" method="POST" name="edit_form" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" name="_method" value="PUT">
          <?= csrf_field(); ?>
          <div class="row g-3">
            <label for="cedula_img" class="form-label">Seleccionar imagen:</label>
            <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" id="cedula_img" name="cedula_img" value="<?= $solicitud['cedula_img']; ?>">
            <!-- <h6>Actual:</h6>
            <img src="<?= $solicitud['cedula_img']; ?>" id="cedula_img" name="cedula_img" alt="" style="max-width: 120px;">
            <p class="small" style="display: inline-block;"><?= $solicitud['cedula_img']; ?></p> -->
            <p class="small" style="color:red">
              <?= validation_show_error('cedula_img'); ?>
            </p>
          </div>
          <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Close</button>
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
        <form action="<?= base_url('solicitudes/' . $id . '/fecha_nacimiento'); ?>" method="POST" name="edit_form" autocomplete="off">
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
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Close</button>
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
