<?php

    $session = session();
    //$encrypter = \Config\Services::encrypter();
    //echo $session->csrf_test_name;
?>

<!-- toast // -->
<?php if(session()->getFlashdata('error') !== null) { ?>

  <div class="toast-container position-fixed bottom-0 end-0 p-6">
    <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <div class="d-flex gap-4">
                <span><i class="fa-solid fa-circle-check fa-lg icon-success"></i></span>
                <div class="d-flex flex-column flex-grow-1 gap-2">
                    <div class="d-flex align-items-center">
                        <span class="fw-semibold"><i class="bi bi-shield-check"></i> <?php echo $session->getFlashdata('mensaje'); ?></span> <!-- imprime el mensaje que viene desde el create o delete del controller -->
                        <button type="button" class="btn-close btn-close-sm ms-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                    </div>
                    <small><?php echo(date('d.m.y')) ?></small>
                </div>
            </div>
        </div>
    </div>
  </div>

  <script>
      const toastLiveExample = document.getElementById('liveToast');
      window.addEventListener('load', () => {
          const toast = new bootstrap.Toast(toastLiveExample);
          toast.show();
      });
  </script>

<?php } ?>



<span class="ir-arriba"><i class="bi bi-arrow-up-square"></i></span>


<a class="boton-arbol-mapa" data-bs-toggle="offcanvas" data-bs-target="#offcanvasArbol" aria-controls="offcanvasArbol" style="">
  <img src="<?= base_url() ?>public/img/logos/menu-lateral.png" alt="">
</a>










      


          

          <!-- offcanvasPerfil -->

        <?php if(auth()->user()) { ?>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasPerfil" aria-labelledby="offcanvasPerfilLabel">

            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasPerfilLabel">Perfil del usuario</h5>
              <div   style="justify-content: flex-end;">
                <a href="<?= base_url() ?>/users/<?= auth()->id(); ?>/edit" class="btn btn-dark" style="justify-content: flex-end;">
                  <i class="bi bi-pencil-fill"></i>
                </a>
                <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
              </div>
            </div>

            <div class="offcanvas-body">

              <div class="container-fluid">

                <div class="mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input readonly type="text" class="form-control" id="id" value="<?php echo auth()->id(); ?>">
                </div>

                <div class="mb-3">
                  <label for="usuario" class="form-label"><?= lang('App.usuario.nombre') ?></label>
                  <input readonly type="text" class="form-control" id="usuario" value="<?php echo auth()->user()->username ?>">
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label"><?= lang('App.usuario.email') ?></label>
                  <input readonly type="text" class="form-control" id="email" value="<?php echo auth()->user()->email; ?>">
                </div>


                <!-- formulario para cambio de perPage -->


              </div>

              <br>

              <div class="modal-footer ">
                <a href="<?= base_url('/logout')?>" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Cerrar sesión</a>
              </div>

            </div>
          </div>

        <?php } ?>














          <!-- offcanvasArbol -->
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasArbol" aria-labelledby="offcanvasArbolLabel">

            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasArbolLabel">Partido Liberal de Nicaragua</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

              <div class="container-fluid">
                <h5>Mapa del sitio</h5>
                <br>
        
                <div class="contenedor-arbol">
                  
                  <ul>
                    <li><a href="<?= base_url()?>"><i class="bi bi-house-door"></i> Inicio</a></li>

                    <?php if(auth()->user()) { ?>

                      <li><a href="<?= base_url(); ?>users"><i class="bi bi-person-check"></i> Usuarios</a></li>
                      <li><a href=<?= base_url('solicitudes')?>><i class="bi bi-clipboard"></i> Solicitudes </a></li>
                      <li><a href=<?= base_url('afiliados')?>><i class="bi bi-bookmark-check"></i> Afiliaciones </a></li>




                      <div class="">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-geo-alt"></i> Localizaciones</a>
                        <li class="nav-item" id="dropdown">
                          <ul class="dropdown-menu">
                            <li> <a class="dropdown-item nav-item" href="<?= base_url(); ?>estados">Paises &raquo; </a>
                              <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item"><img src="<?= base_url(); ?>public/img/logos/ico_nic.png" class="ico_pais" alt=""> Nicaragua &raquo; </a>
                                  <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>departamentos">Departamentos</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>municipios">Municipios</a></li>
                                  </ul>
                                </li>
                                <li> <a class="dropdown-item"><img src="<?= base_url(); ?>public/img/logos/ico_eeuu.png" class="ico_pais" alt=""> EE.UU &raquo; </a>
                                  <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item">Ciudades</a></li>
                                    <li><a class="dropdown-item">Estados</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </div>

                      

                    <?php } ?>


                    <div class="">
                      <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-info-circle"></i> Instructivos</a>
                      <li class="nav-item" id="dropdown">
                        <ul class="dropdown-menu">
                          <li> <a class="dropdown-item" style="background-color: white;"> Con cédula &raquo; </a>
                            <ul class="submenu dropdown-menu">
                              <li><a class="dropdown-item" href="<?= base_url(); ?>instrucciones/con-cedula-movil">Móvil</a></li>
                              <li><a class="dropdown-item" href="<?= base_url(); ?>instrucciones/con-cedula-computadora">Computadora</a></li>
                            </ul>
                          </li>
                          <li> <a class="dropdown-item" style="background-color: white;"> Sin cédula &raquo; </a>
                            <ul class="submenu dropdown-menu">
                              <li><a class="dropdown-item" href="<?= base_url(); ?>instrucciones/sin-cedula-movil">Móvil</a></li>
                              <li><a class="dropdown-item" href="<?= base_url(); ?>instrucciones/sin-cedula-computadora">Computadora</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </div>

                    <li><a href="<?= base_url()?>instrucciones/direccion-mision-vision"><i class="bi bi-collection"></i> Dirección, misión y visión</a></li>
                    <li><a href="<?= base_url()?>instrucciones/reglamento"><i class="bi bi-card-list"></i> Reglamento</a></li>
                    <li><a href="<?= base_url()?>instrucciones/metodologia"><i class="bi bi-card-checklist"></i> Metodología</a></li>
                    <li><a href="<?= base_url()?>instrucciones/empadronamiento"><i class="bi bi-clipboard2-plus"></i> Empadronamiento</a></li>
                    <li><a href="<?= base_url()?>comunicaciones/videos"><i class="bi bi-film"></i> Vídeos</a></li>
                    <li><a href="<?= base_url()?>comunicaciones/articulos"><i class="bi bi-newspaper"></i> Artículos</a></li>
                    <li><a href="<?= base_url()?>formularios/solicitud-afiliacion"><i class="bi bi-person-plus-fill"></i> Afiliación</a></li>

                    <?php if(auth()->user()) { ?>
                      <li><a href="<?= base_url('logout')?>"><i class="bi bi-power"></i> Cerrar sesión</a></li>
                    <?php } ?>




                        

                    

                  </ul>

                </div><!-- fin arbol -->

              </div>

            </div>
          </div>




<!-- Modal info-->
<div class="modal modal-fullscreen fade" id="info" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="infoModalLabel">Info</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="container-fluid">

          <h5>empresa</h5>
          

          

        </div><!-- fin container-fluid -->

      </div><!-- fin modal-body -->

      <div class="modal-footer">
        <h5>pie modal</h5>
      </div>

    </div>
  </div>
</div>











       



<script>
  document.addEventListener("DOMContentLoaded", function(){
  // make it as accordion for smaller screens
  if (window.innerWidth < 992) {

    // close all inner dropdowns when parent is closed
    document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
      everydropdown.addEventListener('hidden.bs.dropdown', function () {
        // after dropdown is hidden, then find all submenus
          this.querySelectorAll('.submenu').forEach(function(everysubmenu){
            // hide every submenu as well
            everysubmenu.style.display = 'none';
          });
      })
    });

    document.querySelectorAll('.dropdown-menu a').forEach(function(element){
      element.addEventListener('click', function (e) {
          let nextEl = this.nextElementSibling;
          if(nextEl && nextEl.classList.contains('submenu')) {	
            // prevent opening link if link needs to open dropdown
            e.preventDefault();
            if(nextEl.style.display == 'block'){
              nextEl.style.display = 'none';
            } else {
              nextEl.style.display = 'block';
            }

          }
      });
    })
  }
  // end if innerWidth
  }); 
  // DOMContentLoaded  end

  $(document).ready(function(){
    $('.ir-arriba').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
  });

  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);
    }
  });

});



  

</script>






<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
<a class="navbar-brand" href="#">Brand</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
    <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
    <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Treeview menu  </a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
        <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
          <ul class="submenu dropdown-menu">
            <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
              <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                <li><a class="dropdown-item" href="#">Multi level 2</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
          </ul>
        </li>
        <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
        <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
      </ul>
    </li>

    <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Treeview menu II </a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
        <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
          <ul class="submenu dropdown-menu">
            <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
              <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                <li><a class="dropdown-item" href="#">Multi level 2</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
            <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
          </ul>
        </li>
        <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
        <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
      </ul>
    </li>

  </ul>
</div> -->
<!-- navbar-collapse.// -->
<!-- </div> -->
<!-- container-fluid.// -->
<!-- </nav> -->




  

