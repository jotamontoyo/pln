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

      <div class="col-sm-4 centrado">

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
      </div>

      <div class="col-sm-8 centrado">
        <div><img src="public/img/logos/logoPLN.jpg" class="img_logo_seccion1" alt=""></div>
      </div>


    </div>


  </div>
  





  <div class="img_backg2">
   

        <div class="jumbotron p-5 centrado">
          
            <h1>Información corporativa</h1>
            <p class="fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
          
        </div>

  </div>






  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner centrado">

      <div class="carousel-item active">

        <img src="public/img/fondos/paisaje-mar.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-start centrar_div">
            <h1 class="centrado">Example headline.</h1>
            <p class="opacity-75 centrado">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary centrado" href="#">Sign up today</a></p>
          </div>
        </div>
        
      </div>

      <div class="carousel-item">
        <img src="public/img/fondos/paisaje-mar.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-start centrar_div">
            <h1 class="centrado">Example headline.</h1>
            <p class="opacity-75 centrado">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary centrado" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="public/img/fondos/paisaje-mar.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-start centrar_div">
            <h1 class="centrado">Example headline.</h1>
            <p class="opacity-75 centrado">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary centrado" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  

<?= $this->include('instrucciones/con-sin-cedula')  ?>

  



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>