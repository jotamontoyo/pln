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
    <h4 class="centrado">Crear Municipio</h4>

    <br>

    <form action="<?= base_url('/municipios') ?>" method="POST" autocomplete="off">

        <input type="hidden" name="_method" value="POST">
        <?= csrf_field(); ?>


            <div class="col-md-6">
                <label for="departamento" class="form-label">Departamento</label>
                <select class="form-select" id="departamento" name="departamento" required>
                    <option value="">Seleccionar</option>
                    <?php foreach($departamentos as $departamento): ?>
                        <option value="<?= $departamento['codigo'] ?>"><?= $departamento['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
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
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= set_value('nombre'); ?>" autofocus>
                    <p class="small" style="color:red">
                        <?= validation_show_error('nombre'); ?>
                    </p>
                </div>
            </div>

            

            <br>

            <div style="text-align: center">
                <button type="submit" class="btn btn-sm btn-outline-primary" name="guardar" id="guardar"><i class="bi bi-floppy"></i> Guardar</button>
                <a href="<?= base_url() ?>municipios"><button type="button" class="btn btn-sm btn-outline-danger" name="cancelar" id="cancelar"><i class="bi bi-x-lg"></i> Cancelar</button></a>
            </div>

        
    </form>

    <br>




</div>








<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>