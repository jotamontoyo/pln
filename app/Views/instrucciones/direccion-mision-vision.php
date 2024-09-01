<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>




<div class="cabecera">


    <div class="centrado">
      <div class="d-flex justify-content-between align-items-center">
        <ul class="redes">
          <li class="icon facebook">
              <span class="tooltip">Facebook</span>
              <span><i class="fab fa-facebook-f"></i></span>
          </li>
          <li class="icon twitter">
              <span class="tooltip">Twitter</span>
              <span><i class="fa-brands fa-x-twitter"></i></span>
          </li>
          <li class="icon instagram">
              <span class="tooltip">Instagram</span>
              <span><i class="fab fa-instagram"></i></span>
          </li>
          <li class="icon linkedin">
              <span class="tooltip">Linkedin</span>
              <span><i class="fab fa-linkedin"></i></span>
          </li>
          <li class="icon pinterest">
              <span class="tooltip">Youtube</span>
              <span><i class="fab fa-youtube"></i></span>
          </li>
          <li class="icon telegram">
              <span class="tooltip">Telegram</span>
              <span><i class="fab fa-telegram"></i></span>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <h1 class="centrado display-4"><img class="img_logo_rotulos" src="../public/img/logos/logoPLN.jpg" alt=""> <b>PARTIDO LIBERAL DE NICARAGUA</b></h1>
    </div>

    

</div>


    <br>
    <div class="row">
        
        <div class="col-sm-4 centrado" style="margin-top: -120px">
            <div class="botones_menu"><a href="../instrucciones/direccion-mision-vision" class="btn btn-primary">Dirección, misión y visión</a></div>
            <div class="botones_menu"><a href="../instrucciones/reglamento" class="btn btn-primary">Reglamento</a></div>
            <div class="botones_menu"><a href="../instrucciones/metodologia" class="btn btn-primary">Metodología</a></div>
            <div class="botones_menu"><a href="../instrucciones/empadronamiento" class="btn btn-primary">Empadronamiento</a></div>
            <div class="botones_menu"><a href="../formularios/solicitud-afiliacion" class="btn btn-primary">Afiliación</a></div>
        </div>



        <div class="col-sm-6">
            
            <br>
            <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="container-breadcrumb breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                  <li class="breadcrumb-item">
                    <a class="" href=<?= base_url(); ?> style="color: red;">
                      <i class="bi bi-house-fill"></i>
                      Inicio
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="" href=<?= base_url() . "instrucciones/direccion-mision-vision" ?> style="color: red;">
                      Dirección, misión y visión
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

            <div>
                <?= $this->include('docs/direccion_mision'); ?>
            </div>



        </div>



    </div>








<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>