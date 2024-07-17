<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>





<div class="container">

    <br><br>
    <h4 class="mb-4 centrado">Editar solicitud</h4>


    <form action="<?= base_url('/solicitudes/' . $id); ?>" method="POST" name="edit_form" enctype="multipart/form-data" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

        <hr class="my-4">
        <div class="row g-3">

            <h5>Datos personales</h5>

            <div class="col-sm-6">
              <label for="afiliado_id" class="form-label">Nº Afiliado</label>
              <input type="text" class="form-control" id="afiliado_id" name="afiliado_id" placeholder="" value="<?= $solicitud['afiliado_id']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('afiliado_id'); ?>
              </p>
            </div>

            <br>

            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $solicitud['nombre']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
              </p>
            </div>

            <div class="col-sm-6">
              <label for="apellidos" class="form-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $solicitud['apellidos']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('apellidos'); ?>
              </p>
            </div>

            <div class="col-sm-6">
              <label for="ciudad" class="form-label">Ciudad:</label>
              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $solicitud['ciudad']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('ciudad'); ?>
              </p>
            </div>

            <div class="col-sm-6">
              <label for="pais" class="form-label">País:</label>
              <input type="text" class="form-control" id="pais" name="pais" value="<?= $solicitud['pais']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('pais'); ?>
              </p>
            </div>

            <hr class="my-4">
            <h5>Identificación</h5>

            <div class="col-sm-2">
              <label for="cedula" class="form-label">Cédula Nº:</label>
              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $solicitud['cedula']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>
            </div>

            <div class="col-sm-4">
              <label for="cedula_img" class="form-label">Cédula imagen:</label>
              <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" id="cedula_img" name="cedula_img" value="<?= $solicitud['cedula_img']; ?>">
              
              <img src="<?= $solicitud['cedula_img']; ?>" id="cedula_img" name="cedula_img" style="max-width: 100px;" alt="">
              <p class="small" style="display: inline-block;"><?= $solicitud['cedula_img']; ?></p>
              
              <p class="small" style="color:red">
                <?= validation_show_error('cedula_img'); ?>
              </p>
            </div>

            <div class="col-sm-2">
              <label for="pasaporte" class="form-label">Pasaporte Nº:</label>
              <input type="text" class="form-control" id="pasaporte" name="pasaporte" value="<?= $solicitud['pasaporte']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('pasaporte'); ?>
              </p>
            </div>

            <div class="col-sm-2">
              <label for="licencia" class="form-label">Licencia Nº:</label>
              <input type="text" class="form-control" id="licencia" name="licencia" value="<?= $solicitud['licencia']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('licencia'); ?>
              </p>
            </div>

            <div class="col-sm-2">
              <label for="residencia" class="form-label">Residencia Nº:</label>
              <input type="text" class="form-control" id="residencia" name="residencia" value="<?= $solicitud['residencia']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('residencia'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Datos de contacto</h5>

            <div class="col-sm-2">
              <label for="whatsapp" class="form-label">Whatsapp Nº:</label>
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $solicitud['whatsapp']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('whatsapp'); ?>
              </p>
            </div>

            <div class="col-sm-4">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $solicitud['email']; ?>">
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






            <div class="col-sm-4">
              <label for="posicion" class="form-label">Posición:</label>
              <input type="text" class="form-control" id="posicion" name="posicion" value="<?= $solicitud['posicion']; ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('posicion'); ?>
              </p>
            </div>

          </div>

        <br><br>

        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
            <a href="<?= base_url(); ?>solicitudes"><button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-x-lg"></i> <?= lang('App.boton.cancelar') ?></button></a>
        </div>

        <br>

    </form>

</div>

<br>



<script>



  $(".checkbox").on('change', function() {
    if ($(this).is(':checked')) {
      $(this).attr('value', 'true');
      var check = $(this).val();
      //console.log(check);
    } else {
      $(this).attr('value', 'false');
      var check = $(this).val();
      //console.log(check);
    }
  });


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

  $(document).ready(function () {
    var cargo = document.getElementById("cargo").value;
    if(cargo == 1) {
      //console.log('true');
      $("#cargo").prop('checked', true);
    } else {
      //console.log('false');
      $("#cargo").prop('checked', false);
    };
  });



</script>




<?= $this->endSection(); ?>

<?php $this->section('scripts') ?>

<?= $this->endSection(); ?>
