<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






<br>

<div class="container">

    <!-- <h2 class="mb-4"><?= lang('App.productos.titulo') ?></h2> -->
    <h4 class="centrado">Edición de división administrativa de nivel 0</h4>

    <br>

    <form action="<?= base_url('pais-residencia/') . $id ?>" method="POST" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

            <div class="col-sm-2">
                <div class="clear-fix">
                    <label for="codigo" class="float-start">
                        <!-- <?= lang('App.productos.codigo') ?> -->
                        Código
                    </label>
                </div>
                <div>
                    <input type="text" class="form-control" name="codigo" id="codigo" value="<?= $paisResidencia['codigo']; ?>" readonly>
                    <p class="small" style="color:red">
                        <?= validation_show_error('codigo'); ?>
                    </p>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="clear-fix">
                    <label for="nombre" class="float-start">
                        <!-- <?= lang('App.productos.nombre') ?> -->
                        Nombre del nivel 0
                    </label>
                </div>
                <div>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $paisResidencia['nombre']; ?>" autofocus>
                    <p class="small" style="color:red">
                        <?= validation_show_error('nombre'); ?>
                    </p>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="clear-fix">
                    <label for="label_nivel1" class="float-start">
                        <!-- <?= lang('App.productos.nombre') ?> -->
                        Clase de nivel 1
                    </label>
                </div>
                <div>
                    <input type="text" class="form-control" name="label_nivel1" id="label_nivel1" value="<?= $paisResidencia['label_nivel1']; ?>">
                    <p class="small" style="color:red">
                        <?= validation_show_error('label_nivel1'); ?>
                    </p>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="clear-fix">
                    <label for="label_nivel2" class="float-start">
                        <!-- <?= lang('App.productos.nombre') ?> -->
                        Clase de nivel 2
                    </label>
                </div>
                <div>
                    <input type="text" class="form-control" name="label_nivel2" id="label_nivel2" value="<?= $paisResidencia['label_nivel2']; ?>">
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