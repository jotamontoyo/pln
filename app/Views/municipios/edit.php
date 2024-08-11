<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<br><br>

<div class="container">

    <h4 class="centrado">Editar Municipio</h4>

    <br>
    


    <form action="<?= base_url('municipios/' . $id); ?>" method="POST" name="edit_form" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>



        <div class="col-sm-2 form-floating">
            <select class="form-select" id="departamento" name="departamento">
                <option value=""></option>
                <?php foreach($departamentos as $departamento): ?>
                    <option value="<?= $departamento['codigo'] ?>" 
                        <?= ($departamento['codigo'] == $municipio['departamento_codigo']) ? 'selected' : '';?>>
                        <?= $departamento['nombre'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <label for="estado_id">Departamento*</label>
            <p class="small" style="color:red">
                <?= validation_show_error('departamento'); ?>
            </p>
        </div>

        <div class="col-sm-2">
            <label for="codigo" class="col-sm-2 col-form-label" style="text-align: right">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo" value="<?= $municipio['codigo']; ?>">
        </div>
        
        <div class="col-sm-2">
            <label for="nombre" class="col-sm-2 col-form-label" style="text-align: right">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $municipio['nombre']; ?>" autofocus>
            <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
            </p>
        </div>

              

        <br>

        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary">Guardar</button>
            <a href="<?= base_url('municipios') ?>"><button type="button" class="btn btn-sm btn-outline-danger">Cancelar</button></a>
        </div>

        <br>

    </form>


</div>


<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>