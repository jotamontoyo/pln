<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>



  <div class="img_backg1">


  


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
      <h1 class="centrado display-4 titulo-index"><b>PARTIDO LIBERAL DE NICARAGUA <img class="img_logo_rotulos" src="public/img/logos/logoPLN.jpg" alt=""></b></h1>
    </div>



    <!-- <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="container-breadcrumb breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
          <li class="breadcrumb-item">
            <a class="" href=<?= base_url(); ?> style="color: red;">
              <i class="bi bi-house-fill"></i>
              Inicio
            </a>
          </li>
        </ol>
      </nav>
    </div> -->

  
    
    
    <div class="row">

      <div class="col-sm-4">
        <nav class="navbar navbar-expand-md navbar-dark centrado">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> Menú
          </button>
          <div class="collapse navbar-collapse navbar-menu" id="navbarCollapse">
            <ul class="navbar-nav">
                  <div class="botones_menu">
                    <a class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                      Instructivos
                    </a>
                    <li class="nav-item" id="dropdown">
                      <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#conCedulaModal"> Con cédula &raquo; </a></li>
                        <li> <a class="dropdown-item" style="background-color: white;"data-bs-toggle="modal" data-bs-target="#sinCedulaModal"> Sin cédula &raquo; </a></li>
                      </ul>
                    </li>
                  </div>
                  <div class="botones_menu"><a href="instrucciones/direccion-mision-vision" class="btn btn-primary">Dirección, misión y visión</a></div>
                  <div class="botones_menu"><a href="instrucciones/reglamento" class="btn btn-primary">Reglamento</a></div>
                  <div class="botones_menu"><a href="instrucciones/metodologia" class="btn btn-primary">Metodología</a></div>
                  <div class="botones_menu"><a href="instrucciones/empadronamiento" class="btn btn-primary">Empadronamiento</a></div>
                  <div class="botones_menu"><a href="comunicaciones/videos" class="btn btn-primary">Vídeos</a></div>
                  <div class="botones_menu"><a href="comunicaciones/articulos" class="btn btn-primary">Artículos</a></div>
                  <div class="botones_menu"><a href="formularios/solicitud-afiliacion" class="btn btn-primary">Afiliación</a></div>
            </ul>
          </div>
        </nav>
      </div>

      <div class="col-sm-8 centrado">
        <div><img src="public/img/logos/logoPLN.jpg" class="img_logo_seccion1" alt=""></div>

          <a href="formularios/solicitud-afiliacion" type="button" class="btn btn-success btn-lg boton-bajo-logo"><i class="bi bi-table"></i>  &nbsp;A f í l i a t e</a>

      </div>


    </div>


  </div>
  





  <div class="img_backg2">

    <!-- por que afiliarse 2º baner -->
    <div class="container px-4 py-5" id="hanging-icons">
      <h2 class="pb-2 border-bottom">Por qué afiliarse...</h2>

      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="">

          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis"><img src="public\img\logos\facil-de-usar.png" width="10%" alt=""> Fácil</h3>
            <p>Registro Directamente desde un sitio web para uso de todos los residentes en el exterior.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div>
            <h3 class="fs-2 text-body-emphasis"><img src="public/img/logos/seguridad-activada.png" width="10%" alt=""> Seguro</h3>
            <p> El sitio web Partido Liberal de Nicaragua está alojado en servidores de alto rendimiento con datos encriptados que garantizan la seguridad y confidencialidad de la información.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div>
            <h3 class="fs-2 text-body-emphasis"><img src="public/img/logos/requerido.png" width="10%" alt=""> Necesario</h3>
            <p>Prepararse desde ya para poder votar en las próximas elecciones con condiciones, los residentes en el exterior somos mas del 25 % del padron.</p>
          </div>
        </div>
      </div>
    </div>

  </div>






  

  

<?= $this->include('instrucciones/con-sin-cedula')  ?>

  





<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>