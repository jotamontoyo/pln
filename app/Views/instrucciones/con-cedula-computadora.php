<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>




<?= $this->include('cabecera'); ?> 


    <br>
    <div class="row">
        
        <div class="col-sm-4" style="margin-top: -115px;">
            <nav class="navbar navbar-expand-md navbar-dark centrado">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Menú
              </button>
              <div class="collapse navbar-collapse navbar-menu" id="navbarCollapse">
                <ul class="navbar-nav">
                        <div class="botones_menu">
                          <a class="btn btn-primary sombra" data-bs-toggle="dropdown" aria-expanded="false">
                            Instructivos
                          </a>
                          <li class="nav-item" id="dropdown">
                            <ul class="dropdown-menu">
                              <li> <a class="dropdown-item" style="background-color: white;"> Con cédula &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                  <li><a class="dropdown-item" href="<?= base_url()?>instrucciones/con-cedula-movil">Móvil</a></li>
                                  <li><a class="dropdown-item" href="<?= base_url()?>instrucciones/con-cedula-computadora">Computadora</a></li>
                                </ul>
                              </li>
                              <li> <a class="dropdown-item" style="background-color: white;"> Sin cédula &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                  <li><a class="dropdown-item" href="<?= base_url()?>instrucciones/sin-cedula-movil">Móvil</a></li>
                                  <li><a class="dropdown-item" href="<?= base_url()?>instrucciones/sin-cedula-computadora">Computadora</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </div>
                        <div class="botones_menu"><a href="../instrucciones/direccion-mision-vision" class="btn btn-primary sombra">Dirección, misión y visión</a></div>
                        <div class="botones_menu"><a href="../instrucciones/reglamento" class="btn btn-primary sombra">Reglamento</a></div>
                        <div class="botones_menu"><a href="../instrucciones/metodologia" class="btn btn-primary sombra">Metodología</a></div>
                        <div class="botones_menu"><a href="../instrucciones/empadronamiento" class="btn btn-primary sombra">Empadronamiento</a></div>
                        <div class="botones_menu"><a href="../comunicaciones/videos" class="btn btn-primary sombra">Vídeos</a></div>
                        <div class="botones_menu"><a href="../comunicaciones/articulos" class="btn btn-primary sombra">Artículos</a></div>
                        <div class="botones_menu"><a href="../formularios/solicitud-afiliacion" class="btn btn-primary sombra">Afiliación</a></div>
                    </ul>
                </div>
            </nav>
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
                    <a class="" href=<?= base_url() . "../instrucciones/con-cedula-computadora" ?> style="color: red;">
                        Instrucciones con cédula para computadora
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

            <div>
                <?= $this->include('docs/con-cedula-computadora'); ?>
            </div>



        </div>



    </div>





<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>