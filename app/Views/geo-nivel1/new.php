<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>


<?php if(session()->getFlashdata('error') !== null) { ?>

    <div class="alert alert-danger" role="alert">

        <?= session()->getFlashdata('error'); ?>

    </div>

<?php } ?>



<br>

<div class="container">

    <!-- <h2 class="mb-4"><?= lang('App.productos.titulo') ?></h2> -->
    <h4 class="centrado">Nuevo Nivel 1 de Residencia</h4>

    <br>

    <form action="<?= base_url('geonivel1' ) ?>" method="POST" autocomplete="off">

        <input type="hidden" name="_method" value="POST">
        <?= csrf_field(); ?>




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
                    <option value="<?= $paisResidencia['codigo'] ?>"><?= $paisResidencia['codigo'] ?> - <?= $paisResidencia['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
            <p class="small" style="color:red">
                <?= validation_show_error('paisResidencia'); ?>
            </p>

        </div>



            <div class="col-sm-2">
                <label for="codigo" class="col-sm-2 col-form-label" style="text-align: right">
                    <!-- <?= lang('App.productos.codigo') ?> -->
                    Código
                </label>
                <div>
                    <input type="text" class="form-control" name="codigo" id="codigo" value="<?= set_value('codigo'); ?>" autofocus>
                    <p class="small" style="color:red">
                        <?= validation_show_error('codigo'); ?>
                    </p>
                </div>
            </div>
            
            <div class="col-sm-2">
                <label for="nombre" class="col-sm-2 col-form-label" style="text-align: right">
                    <!-- <?= lang('App.productos.nombre') ?> -->
                    Nombre
                </label>
                <div>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= set_value('nombre'); ?>">
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