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
    <h4 class="centrado">Crear País de Residencia</h4>

    <br>

    <form action="<?= base_url('pais-residencia') ?>" method="POST" autocomplete="off">

        <input type="hidden" name="_method" value="POST">
        <?= csrf_field(); ?>

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

            <div class="col-sm-2">
                <label for="label1" class="col-sm-2 col-form-label" style="text-align: right">
                    <!-- <?= lang('App.productos.nombre') ?> -->
                    Label 1
                </label>
                <div>
                    <input type="text" class="form-control" name="label1" id="label1" value="<?= set_value('label_nivel1'); ?>">
                    <p class="small" style="color:red">
                        <?= validation_show_error('label_nivel1'); ?>
                    </p>
                </div>
            </div>

            <div class="col-sm-2">
                <label for="label2" class="col-sm-2 col-form-label" style="text-align: right">
                    <!-- <?= lang('App.productos.nombre') ?> -->
                    Label 2
                </label>
                <div>
                    <input type="text" class="form-control" name="label2" id="label2" value="<?= set_value('label_nivel2'); ?>">
                    <p class="small" style="color:red">
                        <?= validation_show_error('label_nivel2'); ?>
                    </p>
                </div>
            </div>

            

            <br>

            <div style="text-align: center">
                <button type="submit" class="btn btn-sm btn-outline-primary" name="guardar" id="guardar"><i class="bi bi-floppy"></i> <?= lang('App.boton.guardar') ?></button>
                <a href="<?= base_url() ?>pais-residencia"><button type="button" class="btn btn-sm btn-outline-danger" name="cancelar" id="cancelar"><i class="bi bi-x-lg"></i> <?= lang('App.boton.cancelar') ?></button></a>
            </div>

        
    </form>

    <br>




</div>








<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>