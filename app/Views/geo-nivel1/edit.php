<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






<br>

<div class="container">

    <!-- <h2 class="mb-4"><?= lang('App.productos.titulo') ?></h2> -->
    <h4 class="centrado">Edición de nivel administrativo 1</h4>

    <br>

    <form action="<?= base_url() . 'geonivel1/' . $id?>" method="POST" autocomplete="off">

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
                    <?= ($paisResidencia['codigo'] == $geoNivel1['pais_residencia_codigo']) ? 'selected' : '';?>>
                    <?= $paisResidencia['nombre'] ?>
                  </option>
                <?php endforeach; ?>
            </select>
            <p class="small" style="color:red">
                <?= validation_show_error('paisResidencia'); ?>
            </p>
            
        </div>
        
        <div class="col-sm-2">
            <div class="clear-fix">
                <label for="nombre" class="float-start">
                    <!-- <?= lang('App.productos.nombre') ?> -->
                    Nombre de nivel 1*
                </label>
            </div>
            <div>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $geoNivel1['nombre']; ?>">
                <p class="small" style="color:red">
                    <?= validation_show_error('nombre'); ?>
                </p>
            </div>
        </div>

        
        <br>
        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="guardar" id="guardar"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
            <a href="<?= base_url() ?>geonivel1"><button type="button" class="btn btn-sm btn-outline-danger" name="cancelar" id="cancelar"><i class="bi bi-x-lg"></i> <?= lang('App.boton.cancelar') ?></button></a>
        </div>

        
    </form>

    <br>




</div>








<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>