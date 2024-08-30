<?= $this->extend('plantilla'); ?>




<?= $this->section('contenido'); ?>








<!-- 1a seccion. class="img_backg" para poner imagen de fondo --> 
    <div class="img_backg">


      <div class="container">

        <div class="row centrado">
          <div class="col-sm-6">
            <img class="sombra animate__animated animate__zoomIn" src="public/img/logos/logoPLN.jpg" style="max-width: 60%; margin-bottom: 15px" alt="">
          </div>
          <div class="col-sm-4">
            <div class="col d-flex flex-column gap-2">
              <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle sombra" data-bs-toggle="dropdown" aria-expanded="false">
                  Instructivos
                </button>
                <li class="nav-item" id="dropdown">
                  <ul class="dropdown-menu sombra">
                    <li> <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#conCedulaModal"> Con cédula &raquo; </a></li>
                    <li> <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sinCedulaModal"> Sin cédula &raquo; </a></li>
                  </ul>
                </li>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
          
          <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Tu participación es importante para el país.</h2>
            <p class="text-body-secondary">Afíliate. Rellena el formulario con tus datos y serás parte del cambio.</p>
            <a href="#formulario_solicitud" class="btn btn-success btn-lg sombra"><i class="bi bi-table"></i> Afíliate</a>
          </div>

          <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
              
              <div class="col d-flex flex-column gap-2">
                <button type="button" class="btn btn-primary sombra" data-bs-toggle="modal" data-bs-target="#misionModal"><i class="bi bi-collection"></i> Dirección, Misión y Visión</button>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Dirección, Misión y Vision</h4>
                <p class="text-body-secondary"> Comité Ejecutivo fundador  y comisiones.  Qué vamos hacer y objetivo general.
                </p>
              </div>

              <div class="col d-flex flex-column gap-2">
                <button type="button" class="btn btn-primary sombra" data-bs-toggle="modal" data-bs-target="#reglamentoModal"><i class="bi bi-card-list"></i> Reglamento</button>
                <h4 class="fw-semibold mb-0 text-body-emphasisa">Reglamento</h4>
                <p class="text-body-secondary">Normas a las que nos debemos y código de ética.</p>
              </div>

              <div class="col d-flex flex-column gap-2">
                <button type="button" class="btn btn-primary sombra" data-bs-toggle="modal" data-bs-target="#metodologiaModal"><i class="bi bi-card-checklist"></i> Metodología</button>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Metodología</h4>
                <p class="text-body-secondary">Afiliación, procesos y administración de la organización.</p>
              </div>

              <div class="col d-flex flex-column gap-2">
                <button type="button" class="btn btn-primary sombra" data-bs-toggle="modal" data-bs-target="#empadronamientoModal"><i class="bi bi-clipboard2-plus"></i> Empadronamiento</button>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Empadronamiento</h4>
                <p class="text-body-secondary">Proyecto para hacer cumplir artículo 122 que permita votar a los Nicaragüenses del exterior residentes o en tránsito.</p>
              </div>
            
            </div>
          </div>

        </div>
      </div>
    </div>





<!-- album -->
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInLeft">
            <video src="public/videos/jorge_esgtrada.mp4" max-width="" height="250" controls></video>
            <div class="card-body">
              <p class="card-text">El contenido del video se basa en las acciones de apoyo realizadas por Don Jorge Estrada, miembro del comité ejecutivo provisional del Partido Liberar de Nicaragua</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInUp">
            <div class="centrado">
              <img src="public/img/comite/comandante_henry.jpg" max-width="400" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">El presidente Reagan recibió la  Dr. y Comandante Henry (Enrique Zelaya) miembro del estado mayor de la contra.</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInRight">
            <div class="centrado">
              <iframe max-width="400" height="300" src="https://www.youtube.com/embed/tHTVkORVWdg?si=gwWDCaCmaXX4Jshd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text">Álvaro Somoza Urcuyo, hijo del presidente Luis Somoza y director de la la alianza por la Libertad con miles de afiliados y conductor del programa semanal "una hora con Álvaro Somoza".</p>
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
                  <li class="icon youtube">
                    <a href="https://www.youtube.com/@nicaraguanfreedomalliance4406" target="_blank">
                      <span class="tooltip">Youtube</span>
                      <span><i class="fab fa-youtube"></i></span>
                    </a>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="centrado">
              <img src="public/img/comite/cesar_grijalba.jpg" max-width="300" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">Dr. César N Grijalva. Abogado, Doctor en Jurisprudencia, Ciencias Políticas, Administración Pública, Desarrollo Internacional. Experto en temas de gobierno de transición, representante de organizaciones.Trabajo Social.</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="centrado">
              <img src="public/img/comite/eli_cabezas.jpg" max-width="200" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">Don Eli Cabezas desde los años 80's principal líder liberal de la diáspora y del nuevo exilio del canada.</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm">
            <iframe max-width="400" height="250" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Texto</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="centrado">
              <img src="public/img/comite/harlinton_orozco.jpg" width="100%" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">Harlinton Orozco y Henry Álvarez de Unión de Exiliados, formado por líderes de tranques durante la rebelion.</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <iframe max-width="400" height="250" src="https://www.youtube.com/embed/f03tKMgzPl0?si=mwvaziFid7C1-Tx3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Podcast de Don Álvaro Somoza. El Robo del Siglo: Cómo Maduro se Burló de la Democracia en Venezuela.</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
                      <span class="tooltip">Pinterest</span>
                      <span><i class="fab fa-pinterest"></i></span>
                  </li>
                  <li class="icon telegram">
                      <span class="tooltip">Telegram</span>
                      <span><i class="fab fa-telegram"></i></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  





<!-- formulario solicitud afilicacion  fondo azul-> style="background-color: #E0ECF8;" -->
  <div id="formulario_solicitud" name="formulario_solicitud"  style="background-color: #E0ECF8;">

    <div class="container">

        <br>
        <h4 class="mb-3 text-center">Solicitud de afiliación</h4>

        <hr>
        <h5>Datos personales</h5>
        <br>

        <form action="<?= base_url('solicitudes/crear') ?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="POST">
          <?= csrf_field(); ?>

          <div class="row g-2">


            <br>

           
            <div class="col-sm-5">

              <label for="nombre">&nbsp; Nombre*</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
              </p>

            </div>
            
            

            <div class="col-sm-5">
              <label for="apellidos">&nbsp; Apellidos*</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= set_value('apellidos'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('apellidos'); ?>
              </p>

            </div>




            




            


            <div class="col-sm-2">

              <div class="clear-fix">
                <label class="float-start" for="fecha_nacimiento">&nbsp; Fecha de nacimiento*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#fechaNacimientoModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= set_value('fecha_nacimiento'); ?>">
               <p class="small" style="color:red">
                <?= validation_show_error('fecha_nacimiento'); ?>
              </p>      

            </div>




            <div class="col-sm-2">
              
              <div class="clear-fix">
                <label class="float-start" for="genero">&nbsp; Género*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#generoModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <select class="form-select" id="genero" name="genero">
                <option value=""></option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
              <p class="small" style="color:red">
                <?= validation_show_error('genero'); ?>
              </p>

            </div>








            <div class="col-sm-2">

              <div class="clear-fix">
                <label class="float-start" for="estado_id">&nbsp; País de residencia*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#paisResidenciaModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <select class="form-select" id="estado_id" name="estado_id">
                <option value=""></option>
                <?php foreach($estados as $estado): ?>
                  <option value="<?= $estado['id'] ?>"><?= $estado['nombre'] ?></option>
                <?php endforeach; ?>
              </select>
              <p class="small" style="color:red">
                  <?= validation_show_error('estado_id'); ?>
              </p>
            </div>

            





          

            








            <div class="col-sm-3" id="ciudad_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" id="ciudad_label" for="ciudad" hidden></label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#ciudadResidenciaModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= set_value('ciudad'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('ciudad'); ?>
              </p>

            </div>


            <div class="col-sm-3" id="pais_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" id="pais_label" for="pais" hidden></label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#estadoResidenciaModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="pais" name="pais" value="<?= set_value('pais'); ?>">
              <label for="pais" class="form-label" id="pais_label" hidden></label>
              <p class="small" style="color:red">
                <?= validation_show_error('pais'); ?>
              </p>
            </div>






            <hr class="my-4">
            <h5>Identificación</h5>

            

            <div class="col-sm-2">

              <div class="" id="tiene_cedula" hidden>

                <label for="estado_id" class="col-form-label">
                  ¿Tiene cédula?
                </label>

                <div class="clear-fix">

                  <div class="form-check float-start">
                    <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula" checked>
                    <label class="form-check-label" for="radio_tiene_cedula">
                      Sí &nbsp; &nbsp;
                    </label>
                  </div>

                  <div class="form-check float-start">
                    <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula" >
                    <label class="form-check-label" for="radio_tiene_cedula">
                      No
                    </label>
                  </div>

                </div>

              </div>

            </div>


            

            
















            <!-- campos solo para la cedula -->

            <div class="col-sm-2" id="cedula_panel" name="cedula_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="cedula">&nbsp; Cédula*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#cedulaModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= set_value('cedula'); ?>">
              <!-- <label for="cedula" class="form-label" id="cedula_label">Cédula Nº:</label> -->
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>

            </div>





            <div class="col-sm-2" id="departamento_id_panel" name="departamento_id_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="departamento_id">&nbsp; Departamento*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#departamentoModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <select class="form-select" id="departamento_id" name="departamento_id">
                  <option value=""></option>
                  <?php foreach($departamentos as $departamento): ?>
                      <option value="<?= $departamento['codigo'] ?>"><?= $departamento['nombre'] ?></option>
                  <?php endforeach; ?>
              </select>
              <!-- <label for="estado_id">Departamento de expedición*</label> -->
              <p class="small" style="color:red">
                  <?= validation_show_error('departamento_id'); ?>
              </p>
            </div>




            <div class="col-sm-2" id="municipio_id_panel" name="municipio_id_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="municipio_id">&nbsp; Municipio*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#municipioModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <select class="form-select" id="municipio_id" name="municipio_id">
                  <option value=""></option>
                  <?php foreach($municipios as $municipio): ?>
                      <option value="<?= $municipio['codigo'] ?>" data-departamento="<?= $municipio['departamento_codigo'] ?>"><?= $municipio['nombre'] ?></option>
                  <?php endforeach; ?>
              </select>
              <!-- <label for="estado_id">Municipio de expedición*</label> -->
              <p class="small" style="color:red">
                  <?= validation_show_error('municipio_id'); ?>
              </p>
            </div>

            <!-- FIN campos solo para la cedula -->








            <!-- campos para cuando no hay cedula -->
            <div class="col-sm-2" id="tipo_doc_panel" name="tipo_doc_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="tipo_doc">&nbsp; Tipo documento*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#tipo_docModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <select class="form-select" id="tipo_doc" name="tipo_doc">
                <option value=""></option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="Licencia">Licencia</option>
                <option value="Residencia">Residencia</option>
              </select>
              <p class="small" style="color:red">
                <?= validation_show_error('tipo_doc'); ?>
              </p>

            </div>




            <div class="col-sm-2" id="numero_doc_panel" name="numero_doc_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="numero_doc">&nbsp; Nº documento*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#numero_docModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="numero_doc" name="numero_doc" value="<?= set_value('numero_doc'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('numero_doc'); ?>
              </p>

            </div>




            <div class="col-sm-2" id="expedicion_doc_panel" name="expedicion_doc_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="expedicion_doc">&nbsp; Lugar de expedición*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#expedicion_docModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="expedicion_doc" name="expedicion_doc" value="<?= set_value('expedicion_doc'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('expedicion_doc'); ?>
              </p>

            </div>
            <!-- FIN campos para cuando no hay cedula -->













            
            <div class="col-sm-3" id="cedula_img_panel" name="cedula_img_panel" hidden>

              <div class="clear-fix">
                <label class="float-start" for="cedula_img">&nbsp; Imagen*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#imagenModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="file" class="form-control" id="cedula_img" name="cedula_img" accept="image/jpeg, image/jpg, image/png" value="<?= set_value('cedula_img'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('cedula_img'); ?>
              </p>
            </div>

            





            <hr class="my-4">
            <h5>Datos de contacto</h5>






            <div class="col-sm-2">

              <div class="clear-fix">
                <label class="float-start" for="whatsapp">&nbsp; WhatsApp Nº*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#whatsappModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= set_value('whatsapp'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('whatsapp'); ?>
              </p>

            </div>





            <div class="col-sm-4">

              <div class="clear-fix">
                <label class="float-start" for="email">&nbsp; Email*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#emailModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('email'); ?>
              </p>

            </div>






            <hr class="my-4">
            <h5>Tipo de participación</h5>



            <div class="row">

              <div class="col-sm-2 clear-fix">
                    
                <div class="form-check float-start">
                  <input class="form-check-input" type="checkbox" id="afiliado" name="afiliado" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    Afiliado
                  </label>
                  <p class="small" style="color:red">
                    <?= validation_show_error('afiliado'); ?>
                  </p>
                </div>
                    
                    
                <div class="form-check float-end">
                  <input class="form-check-input" type="checkbox" id="cargo" name="cargo">
                  <label class="form-check-label" for="flexCheckChecked">
                    Cargo
                  </label>
                  <p class="small" style="color:red">
                    <?= validation_show_error('cargo'); ?>
                  </p>
                </div>
                    
              </div>

            </div>






            <div class="col-sm-4">

              <div class="clear-fix">
                <label class="float-start" for="posicion">&nbsp; Posición*</label>
                <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#posicionModal">
                  <img src="public\img\logos\pregunta.png" class="img_interrogacion_campos" alt="">
                </a>
              </div>

              <input type="text" class="form-control" id="posicion" name="posicion" value="<?= set_value('posicion'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('posicion'); ?>
              </p>

            </div>
            
          </div>




          <div class="centrar_div">
            <br>              
            <button class="btn btn-primary btn-lg" type="submit" id="bSubmit" name="bSubmit"><i class="bi bi-send"></i> Enviar solicitud</button>
          </div>
          <br>

          <br>
        </form>

    </div>

  
  
  </div>


  

<!-- instrucciones con cedula modal -->
  <div class="modal fade" id="conCedulaModal" tabindex="-1" aria-labelledby="conCedulaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="conCedulaModalLabel">Instrucciones con cédula</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4 py-5">
            <div class="row centrado">
              <div class="col-sm-6">
                <a href="public/docs/instrucciones Computadora CON CEDULA.pdf"><img src="public/img/logos/pc_escritorio.png" alt=""> &nbsp;Para computadora</a>
              </div>
              <div class="col-sm-6">
                <a href="public/docs/instrucciones Movil CON CEDULA-0.pdf"><img src="public/img/logos/smart_phone.png" alt="">Para móvil</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




<!-- instrucciones sin cedula modal -->
  <div class="modal fade" id="sinCedulaModal" tabindex="-1" aria-labelledby="sinCedulaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="sinCedulaModalLabel">Instrucciones sin cédula</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4 py-5">
            <div class="row centrado">
              <div class="col-sm-6">
                <a href="public/docs/instrucciones Computadora SIN CEDULA.pdf"><img src="public/img/logos/pc_escritorio.png" alt=""> &nbsp;Para computadora</a>
              </div>
              <div class="col-sm-6">
                <a href="public/docs/instrucciones Movil SIN CEDULA-0.pdf"><img src="public/img/logos/smart_phone.png" alt="">Para móvil</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>






<!-- mision, vision y justificacion modal -->
  <div class="modal fade" id="misionModal" tabindex="-1" aria-labelledby="misionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="misionModalLabel"><img src="public/img/fondos/bandera_nicaragua.png" style="max-width: 20px;" alt=""> Misión, visión y justificación</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?= $this->include('docs/direccion_mision'); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




<!-- reglamento modal -->
  <div class="modal fade" id="reglamentoModal" tabindex="-1" aria-labelledby="reglamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="reglamentoModalLabel">Reglamento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <?= $this->include('docs/reglamento'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!-- metodologia modal -->
  <div class="modal fade" id="metodologiaModal" tabindex="-1" aria-labelledby="metodologiaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" >Metodología</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <?= $this->include('docs/metodologia'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!-- empadronamiento modal -->
  <div class="modal fade" id="empadronamientoModal" tabindex="-1" aria-labelledby="empadronamientoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="empadronamientoLabel">Empadronamiento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <?= $this->include('docs/empadronamiento'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>





<!-- fechaNacimientoModal -->
  <div class="modal fade" id="fechaNacimientoModal" tabindex="-1" aria-labelledby="fechaNacimientoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Seleccione o escriba aquí su fecha de nacimiento.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




<!-- generoModal -->
  <div class="modal fade" id="generoModal" tabindex="-1" aria-labelledby="generoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Seleccione la opción que corresponda.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




<!-- paisResidenciaModal -->
  <div class="modal fade" id="paisResidenciaModal" tabindex="-1" aria-labelledby="paisResidenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Seleccione el país donde reside habitualmente.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




<!-- ciudadResidenciaModal (departmaneto, provincia....) -->
  <div class="modal fade" id="ciudadResidenciaModal" tabindex="-1" aria-labelledby="ciudadResidenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Escriba la opción que corresponda.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>




  <!-- estadoResidenciaModal (municipio, estado) -->
  <div class="modal fade" id="estadoResidenciaModal" tabindex="-1" aria-labelledby="estadoResidenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Escriba la opción que corresponda.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>







<!-- cedulaModal -->
  <div class="modal fade" id="cedulaModal" tabindex="-1" aria-labelledby="cedulaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          
            <div class="row centrado">
              <p>Introduzca aquí el número de cédula tal y como está en su documento.</p>
            </div>
          
        </div>
      </div>
    </div>
  </div>



<!-- departamentoModal -->
  <div class="modal fade" id="departamentoModal" tabindex="-1" aria-labelledby="departamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione de la lista el departamento donde se expidió la cédula.</p>
            </div>

        </div>
      </div>
    </div>
  </div>



 <!-- municipioModal -->
  <div class="modal fade" id="municipioModal" tabindex="-1" aria-labelledby="municipioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione de la lista el municipio donde se expidió la cédula.</p>
            </div>

        </div>
      </div>
    </div>
  </div>



<!-- imagenModal -->
  <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione de sus archivos una imagen del documento. Formatos autorizados: jpg, jpeg y png.</p>
            </div>

        </div>
      </div>
    </div>
  </div>




<!-- tipo_docModal -->
  <div class="modal fade" id="tipo_docModal" tabindex="-1" aria-labelledby="tipo_docModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Seleccione el tipo de documento con el que quiere identificarse en caso de no tener cédula.</p>
            </div>

        </div>
      </div>
    </div>
  </div>





<!-- numero_docModal -->
  <div class="modal fade" id="numero_docModal" tabindex="-1" aria-labelledby="numero_docModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Escriba aquí el número del documento con el que se identifica.</p>
            </div>

        </div>
      </div>
    </div>
  </div>




<!-- expedicion_docModal -->
  <div class="modal fade" id="expedicion_docModal" tabindex="-1" aria-labelledby="expedicion_docModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ayudaFormulario">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">

            <div class="row centrado">
              <p>Escriba aquí el país donde se expidió el documento con el que se identifica.</p>
            </div>

        </div>
      </div>
    </div>
  </div>





  








<script>

      
  $(document).ready(function () {


    $(".checkbox").on('change', function() {
      if ($(this).is(':checked')) {
        $(this).attr('value', 'true');
        var check = $(this).val();
        //console.log(check);
        //$('#afiliado value').val(check);
        //console.log($('#afiliado').val(check));
      } else {
        $(this).attr('value', 'false');
        var check = $(this).val();
        //console.log(check);
        //$('#afiliado').val(check);
        //console.log($('#afiliado').val(check));
      }
    });




    //muestra campos segun el pais elejido en el campo estado_id
  
    $(document).on('change','#estado_id',function() {
      var pais = document.getElementById("estado_id").value;
      if(pais == 1 | pais == 5) { 
        $('#ciudad_label').html("&nbsp; Departamento*"); 
        $('#pais_label').html("&nbsp; Municipio*");  
      };
      if(pais == 2 | pais == 4) { 
        $('#ciudad_label').html("&nbsp; Ciudad*"); 
        $('#pais_label').html("&nbsp; Estado*");  
      };
      if(pais == 3) { 
        $('#ciudad_label').html("&nbsp; Provincia*"); 
        $('#pais_label').html("&nbsp; Comunidad*");  
      };
      $("#cedula_img").prop('hidden', false);
      $("#cedula_img_panel").prop('hidden', false);
      $("#cedula_panel").prop('hidden', false);
      $("#tiene_cedula").prop('hidden', false);
      $("#departamento_id_panel").prop('hidden', false);
      $("#municipio_id_panel").prop('hidden', false);
      $("#ciudad_panel").prop('hidden', false);
      $("#ciudad_label").prop('hidden', false);
      $("#pais_panel").prop('hidden', false);
      $("#pais_label").prop('hidden', false);
    });



  

    // activa el campo nº de cedula
    $(document).on('click','#tiene_cedula',function() {
      var cedula = document.getElementById("radio_tiene_cedula").checked;
      if(cedula == false) {
        $("#cedula_panel").prop('hidden', true);
        $("#departamento_id_panel").prop('hidden', true);
        $("#municipio_id_panel").prop('hidden', true);
        $("#tipo_doc_panel").prop('hidden', false);
        $("#numero_doc_panel").prop('hidden', false);
        $("#expedicion_doc_panel").prop('hidden', false);
      } else {
        $("#cedula_panel").prop('hidden', false);
        $("#departamento_id_panel").prop('hidden', false);
        $("#municipio_id_panel").prop('hidden', false);
        $("#tipo_doc_panel").prop('hidden', true);
        $("#numero_doc_panel").prop('hidden', true);
        $("#expedicion_doc_panel").prop('hidden', true);
      };
    });
    






    // activa boton submit cuando hay un cambio
    /* $(".form-control, .form-select").on('change', function() {
      activarSubmit($(this));
    });
    function activarSubmit(obj){
      $("#bSubmit").prop('disabled', false);
    }; */
  





    /*$(document).on("change", '#cedula_img', function () {
      // Tamaño maximo del archivo
      const maxSize = 2000000; 
      // si no hay archivos, regresamos
      if (this.files.length <= 0) return;
      // Validamos el primer archivo únicamente
      const archivo = this.files[0];
      if (archivo.size > maxSize) {
          const tamanioEnMb = maxSize / 1000000;
          swal('Excede el tamaño de la imagen', `Máximo ${tamanioEnMb} MB`, 'error');
          // Limpiar
          document.getElementById("cedula_img").value = "";
      } else {
          // Validación pasada. Envía el formulario o haz lo que tengas que hacer
      }
    }); */


  });




</script>



    



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

   
<?= $this->endSection(); ?>