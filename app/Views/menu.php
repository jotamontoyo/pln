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








<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item active"> <a class="nav-link" href=<?= base_url() ?>>Inicio </a> </li>
      <li class="nav-item active"> <a class="nav-link" href=<?= base_url('login') ?>>Acceso </a> </li>
      
        <?php if(auth()->user()) { ?>
          
          <li class="nav-item"><a class="nav-link" href=<?= base_url('users')?>> Usuarios </a></li>
          <li class="nav-item"><a class="nav-link" href=<?= base_url('solicitudes')?>> Solicitudes </a></li>
        
          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Compras  </a>
            <ul class="dropdown-menu">

              <li> <a class="dropdown-item" href=<?= base_url()?>> Almacenenes &raquo; </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href="#">SubAlmacenenes</a></li>
                  <!-- <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                  <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                    <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                      <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                  <li><a class="dropdown-item" href="#">Submenu item 5</a></li> -->
                </ul>
              </li>
                

              <li> <a class="dropdown-item" href=<?= base_url()?>> Productos &raquo; </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href=<?= base_url()?>>Grupos</a></li>
                  <li><a class="dropdown-item" href=<?= base_url()?>>Categorías</a></li>
                  <li><a class="dropdown-item" href=<?= base_url()?>>SubCategorías</a>
                    <!-- <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                      <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                    </ul> -->
                  </li>
                  <!-- <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                  <li><a class="dropdown-item" href="#">Submenu item 5</a></li> -->
                </ul>
              </li>
              <li> <a class="dropdown-item" href=<?= base_url()?>> Pedidos </a></li>
              <!-- <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
              <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li> -->
      
            </ul>

          </li>

          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  RR.HH </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href=""> Departamentos </a></li>
              <li> <a class="dropdown-item" href=""> Empleados </a></li>
              <!-- <li> <a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
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
              <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li> -->
            </ul>
          </li>

          <div class="container">

            <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPerfil" aria-controls="offcanvasPerfil">
              <i class="bi bi-person-fill"></i>
            </button>

        <?php } ?>


            <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#info" style="float: right;"><i class="bi bi-info-circle-fill"></i></button> -->

            

          </div> 
        

          
          
            <img src="<?= base_url(); ?>img/logos/logoPLN.jpg" style="max-width: 45px; float: right;" alt="">
            

      </ul>

    </div>
  </div>
</nav>



<br><br>






<!-- <nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">

    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasArbol" aria-controls="offcanvasArbol" style="float: left;">
    <i class="bi bi-three-dots"></i>
    </button>
    
    <a class="navbar-brand" href="#">Empresa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">


        <li class="nav-item active"> <a class="nav-link" href=<?= base_url() ?>>Inicio </a> </li>
        <li class="nav-item active"> <a class="nav-link" href=<?= base_url('login') ?>>Acceso </a> </li>
        
        <?php if(auth()->user()) { ?>
          
          <li class="nav-item"><a class="nav-link" href=<?= base_url('users')?>> Usuarios </a></li>
          <li class="nav-item"><a class="nav-link" href=<?= base_url('solicitudes')?>> Solicitudes </a></li>
        
          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Compras  </a>
            <ul class="dropdown-menu">

              <li> <a class="dropdown-item" href=<?= base_url()?>> Almacenenes &raquo; </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href="#">SubAlmacenenes</a></li>
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
                

              <li> <a class="dropdown-item" href=<?= base_url()?>> Productos &raquo; </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href=<?= base_url()?>>Grupos</a></li>
                  <li><a class="dropdown-item" href=<?= base_url()?>>Categorías</a></li>
                  <li><a class="dropdown-item" href=<?= base_url()?>>SubCategorías</a>
                     <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                      <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                    </ul> 
                  </li>
                  <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                  <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                </ul>
              </li>
              <li> <a class="dropdown-item" href=<?= base_url()?>> Pedidos </a></li>
              <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
              <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
      
            </ul>

          </li>



          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  RR.HH </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href=""> Departamentos </a></li>
              <li> <a class="dropdown-item" href=""> Empleados </a></li>
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


        
      <div class="container">

        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPerfil" aria-controls="offcanvasPerfil" style="float: right;">
          <i class="bi bi-person-fill"></i>
        </button>

        <?php } ?>


        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#info" style="float: right;"><i class="bi bi-info-circle-fill"></i></button>

        

      </div> 
        

        <div class="container">
        
          <img src="<?= base_url(); ?>img/logos/logoPLN.jpg" style="max-width: 30px; float: right;" alt="">
          
        </div>


    </div>
  

  </div>


</nav> -->



          


          

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
              <h5 class="offcanvas-title" id="offcanvasArbolLabel">Arbol</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

              <!-- <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>

              <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div> -->

              <div class="container-fluid">
                <h5>empresa</h5>
        
                <div class="contenedor-arbol">
                  <ul>
                    <li>Compras
                      <ul>

                        <a href="http://localhost/empresa/public/productos"><li>Productos</a>
                          <ul>
                            <a href="http://localhost/empresa/public/grupo-productos"><li>Grupos de productos</li></a>
                            <a href="http://localhost/empresa/public/categoria-productos"><li>Categorías de productos</li></a>
                            <a href="http://localhost/empresa/public/subcategoria-productos"><li>Subcategorías de productos</li></a>
                          </ul>
                        </li>

                        <li>Ubicaciones
                          <ul>
                            <li>Zonas</li>
                            <li>Delegaciones</li>
                            <li>Centros</li></a>
                            <a href="http://localhost/empresa/public/almacen"><li>Almacenes</li></a>
                            <li>Genericons.svg</li>
                            <li>Genericons.ttf</li>
                            <li>Genericons.woff</li>
                            <li>LICENSE.txt</li>
                            <li>README.md</li>
                          </ul>
                        </li>

                        <li>Pedidos
                          <ul>
                            <li>creativecommons_public-domain_80x15.png</li>
                            <li>gnu-head-mini.png</li>
                            <li>questioncopyright-favicon.png</li>
                          </ul>
                        </li>

                        <li>Recepciones
                          <ul>
                            <li>functions.js</li>
                            <li>jquery-3.1.1.js</li>
                          </ul>
                        </li>

                      </ul>
                    </li>

                    <li>RR.HH
                      <ul>
                        <a href="http://localhost/empresa/public/empleados"><li>Empleados</li></a>
                        <a href="http://localhost/empresa/public/departamentos"><li>Departamentos</li></a>
                      </ul>
                    </li>

                    <li>templates
                      <ul>
                        <li>archives.html</li>
                        <li>article.html</li>
                        <li>article_info.html</li>
                        <li>author.html</li>
                        <li>authors.html</li>
                        <li>base.html</li>
                        <li>category.html</li>
                        <li>index.html</li>
                        <li>page.html</li>
                        <li>pagination.html</li>
                        <li>period_archives.html</li>
                        <li>tag.html</li>
                        <li>taglist.html</li>
                        <li>tags.html</li>
                      </ul>
                    </li>

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