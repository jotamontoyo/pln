<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>


<br><br><br>

<div class="container">

<form action="<?= base_url('users/' . $id) ?>" method="POST" name="edit_form" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label" style="text-align: right">ID</label>
            <div class="col-md-6">
                <input readonly type="text" class="form-control" name="id" id="id" value="<?= $user->id ?>">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label" style="text-align: right"><?= lang('App.usuario.nombre') ?></label>
            <div class="col-md-6">
                <input readonly type="text" class="form-control" name="nombre" id="nombre" value="<?= $user->username; ?>" >
                <p class="small" style="color:red">
                    <?= validation_show_error('username'); ?>
                </p>
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label" style="text-align: right"><?= lang('App.usuario.email') ?></label>
            <div class="col-md-6">
                <input readonly type="email" class="form-control" name="email" id="email" value="<?= $user->email; ?>">
                <p class="small" style="color:red">
                    <?= validation_show_error('email'); ?>
                </p>
            </div>
        </div>

            

                <div class="col-6 centrar_div">  
                  <div class="container border">
                    <div class="row">
                      <div class="col-4">Grupos</div>
                      <div class="col-6">
                        <?php foreach ($groups as $group) : ?>
                          <?php echo $group['group']; ?> <br>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>

                <br>


              <div class="col-6 centrar_div">
                <div class="container border">
                  <div class="row">
                    <div class="col-4">Permisos</div>
                    <div class="col-6">
                      <?php foreach ($permissions as $permission) : ?>
                        <?php echo $permission['permission']; ?> <br>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>

                <br>




      

        <br>

        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary" id="guardar" name="guardar">Guardar</button>
            <a href="<?= base_url('users') ?>"><button type="button" class="btn btn-sm btn-outline-danger">Salir</button></a>
        </div>

        <br>

    </form>

</div>

    

    



<?= $this->endSection(); ?>

<?php $this->section('scripts') ?>
   
<?= $this->endSection(); ?>
