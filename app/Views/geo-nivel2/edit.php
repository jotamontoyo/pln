<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






<br>

<div class="container">

    <!-- <h2 class="mb-4"><?= lang('App.productos.titulo') ?></h2> -->
    <h4 class="centrado">Edición de nivel administrativo 2</h4>

    <br>

    <form action="<?= base_url() . 'geonivel2/' . $id?>" method="POST" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

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
                  <?= ($paisResidencia['codigo'] == $pais[0]['codigo']) ? 'selected' : '';?>>
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
              <label class="float-start" id="geoNivel1Label" for="geoNivel1">&nbsp; Nombre de nivel 1*</label>
              <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#">
                <img src="<?= base_url(); ?>public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
              </a>
            </div>
            <select class="form-select" id="geoNivel1" name="geoNivel1">
                <option value=""></option>
                <?php foreach($geoNiveles1 as $geoNivel1): ?>
                    <option value="<?= $geoNivel1['codigo'] ?>" data-pais="<?= $geoNivel1['pais_residencia_codigo'] ?>"
                      <?= ($geoNivel1['codigo'] == $nivel1[0]['codigo']) ? 'selected' : '';?>>
                      <?= $geoNivel1['nombre'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <p class="small" style="color:red">
                <?= validation_show_error('geoNivel1'); ?>
            </p>
                
        </div>


        
        <div class="col-sm-2">
            <div class="clear-fix">
              <label class="float-start" id="geoNivel2Label" for="geoNivel1">&nbsp; Nombre*</label>
              <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#">
                <img src="<?= base_url(); ?>public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
              </a>
            </div>
            <div>
                <input type="text" class="form-control" value="<?= $geoNivel2['nombre']; ?>" id="geoNivel2" name="geoNivel2">
                <p class="small" style="color:red">
                    <?= validation_show_error('geoNivel2'); ?>
                </p>
            </div>
        </div>



        
        <br>
        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="guardar" id="guardar"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
            <a href="<?= base_url() ?>geonivel2"><button type="button" class="btn btn-sm btn-outline-danger" name="cancelar" id="cancelar"><i class="bi bi-x-lg"></i> <?= lang('App.boton.cancelar') ?></button></a>
        </div>

        
    </form>

    <br>




</div>








<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>