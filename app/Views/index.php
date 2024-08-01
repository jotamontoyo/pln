<?= $this->extend('plantilla'); ?>




<?= $this->section('contenido'); ?>



  <!-- <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#formulario_solicitud" class="btn btn-primary my-2 animate__animated animate__zoomIn">Formulario de afiliación</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section> 

  <br>

  <div class="container fluid centrado">
    <img src="public/img/logos/logoPLN.jpg" style="max-width: 40%" alt="">
  </div> -->


  







  <div class="px-4 py-5">

    <div class="container">

      <div class="row centrado">
        <div class="col-sm-6">
          <img src="public/img/logos/logoPLN.jpg" style="max-width: 50%;" alt="">
        </div>
        <div class="col-sm-4">
          <div class="col d-flex flex-column gap-2">
              
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Instructivos
            </button>


            <li class="nav-item" id="dropdown">

              <ul class="dropdown-menu">


                
                  

                <li> <a class="dropdown-item" href=<?= base_url()?>> Con cédula &raquo; </a>
                  <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href=<?= base_url()?>>Ver video</a></li>
                    <li><a class="dropdown-item" href=<?= base_url()?>>Descargar pdf</a></li>

                      <!-- <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                        <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                      </ul> -->
                    </li>
                    <!-- <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                    <li><a class="dropdown-item" href="#">Submenu item 5</a></li> -->
                  </ul>
                </li>
                <!-- <li> <a class="dropdown-item" href=<?= base_url()?>> Pedidos </a></li>
                <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li> -->


                <li> <a class="dropdown-item" href=<?= base_url()?>> Sin cédula &raquo; </a>
                  <ul class="submenu dropdown-menu">
                    <li><a class="dropdown-item" href=<?= base_url()?>>Ver video</a></li>
                    <li><a class="dropdown-item" href=<?= base_url()?>>Descargar pdf</a></li>

                      <!-- <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                        <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                      </ul> -->
                    </li>
                    <!-- <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                    <li><a class="dropdown-item" href="#">Submenu item 5</a></li> -->
                  </ul>
                </li>







        
              </ul>

            </li>



            


            

          






        </div>
      </div>
    </div>

      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
          <h2 class="fw-bold text-body-emphasis">Tu participación es importante para el país.</h2>
          <p class="text-body-secondary">Afíliate. Rellena el formulario con tus datos y serás un miembro del cambio.</p>
          <a href="#formulario_solicitud" class="btn btn-success btn-lg"><i class="bi bi-table"></i> Afíliate</a>
        </div>

        <div class="col">

          <div class="row row-cols-1 row-cols-sm-2 g-4">
            
            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reglamentoModal"><i class="bi bi-collection"></i> Dirección, Misión y Visión</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#declaracionModal"><i class="bi bi-card-list"></i> Reglamento</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#metodologiaModal"><i class="bi bi-card-checklist"></i> Metodología</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#empadronamientoModal"><i class="bi bi-clipboard2-plus"></i> Empadronamiento</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
          
          </div>

        </div>

      </div>
    </div>
  </div>

  


  <!-- direccion mision y vision modal -->
  <div class="modal fade" id="reglamentoModal" tabindex="-1" aria-labelledby="reglamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="reglamentoModalLabel">Reglamento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">



        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom centrado"><img src="public/img/logos/logoPLN.jpg" style="max-width: 40px;" alt=""> Reglamento del Partido Liberal de Nicaragua como organización de oposición</h2>
          <p class="centrado text-emphasis fw-semibold">APROBADOS POR EL COMITÉ EJECUTIVO REUNIDA EN SESIONES 
            EXTRAORDINARIAS EN LA CIUDAD DE MIAMI, FLORIDA DURANTE LOS DIAS 4 Y 5
          DE MARZO DEL 2023</p>
          <hr>
          <h5 class="centrado">COMITE EJECUTIVO FUNDACIONAL</h5>
          <p class="centrado">Lic. Alvaro Somoza Urcuyo</p>
          <p class="centrado">Don Eli Cabezas Boza</p>
          <p class="centrado">Dr. Enrique Zelaya Cruz</p>
          <p class="centrado">Lic. Luis Barreto Novoa</p>
          <p class="centrado">Don Jorge Estrada Vélez</p>
          <p class="centrado">Ing. Arlington Orozco</p>
          <p class="centrado">Ing. Henry Alvarez</p>
          <p class="centrado">Secretario: Dr. Cesar Napoleón Grijalva Hinojo</p>
          
          <p class="centrado small">COMISIONES Planificación: Acciones/ Monitoreo, seguimiento del plan de acción. Relaciones Exteriores: Enlace con organismos y personalidades. Comunicación: divulgación y relación con los medios. Afiliación y coordinación: Registro de estructuras y comunicación. Seguimiento y Control: de tareas según estructura funcional. Auditoria: Supervisión de ingresos y ejecución del gasto.</p>
          <p class="centrado small">Inscripción como organización
                    Realizada en el Estado de la Florida, USA el 15 de Agosto del 2023 con el numero N23000009852, Estatutos de la Florida 15.16
                    Casa Provisional del Partido Liberal de Nicaragua
                    Dirección: 625 Biltmore Way, apt 1207 Coral Gables Florida 33134,
                    Miami, Florida, USA – Teléfono 01 (786) 564 1604</p>

          <br>
          <h4 class="centrado">Nuestros valores:</h4>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            

            <div class="feature col">
              <h3 class="fs-2 text-body-emphasis">Misión</h3>
              <p>Crear un núcleo de unidad.</p>
              <a href="#flush-collapseOne">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Contenido</button>
              </a>
            </div>

            <div class="feature col">
              <h3 class="fs-2 text-body-emphasis">Visión</h3>
              <p>Ser la principal fuerza de oposición.</p>
              <a href="#flush-collapseTwo">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Contenido</button>
              </a>
            </div>

            <div class="feature col">
              <h3 class="fs-2 text-body-emphasis">Justificación</h3>
              <p>Contrarestar la amenaza sandinista.</p>
              <a href="#flush-collapseThree">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Contenido</button>
              </a>
            </div>

          </div>
        </div>




          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Misión: contenido
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Consiste en crear un núcleo de unidad de todos los opositores al sandinismo y cualquiera de sus expresiones, iniciando en esta etapa como una organización de oposición de orden liberal con estructuras de coordinación como de representaciones territoriales y la afiliación de participantes dentro y fuera de Nicaragua.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Visión: contenido
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Lograr ser la principal fuerza de oposición, incorporar a la diáspora para que ejerzan sus derechos con sus representantes vía acciones reales como de promover el voto en el exterior en las primeras elecciones con condiciones, lograr representación clandestina en cada municipio y departamento a lo interno de Nicaragua preparándonos para en su momento inscribirnos como partido, participar y ganar las primeras elecciones cuando se existan condiciones.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Jusitifcación: contenido
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Ante la amenaza de organizaciones de oposición que cohabitan con grupo o personas que creen en el rescate del sandinismo y haciendo honor a las mayorías demostradas en procesos electorales, hemos fundado el Partido Liberal de Nicaragua que inicia como una organización política encargada de proveer a los Nicaragüenses de un espacio bajo los principios liberales para que con la ayuda de Dios y de todos lograr evitar un retorno al pasado criminal de los 80´s así como rechazar a cómplices que ahora se encuentran infiltrados y liderando grupos opositores.</p>
                </div>
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




  <!-- reglamento modal -->
  <div class="modal fade" id="declaracionModal" tabindex="-1" aria-labelledby="declaracionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="declaracionModalLabel">Reglamento</h1>
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






<!-- direccion mision y vision modal -->
<div class="modal fade" id="reglamentoModal" tabindex="-1" aria-labelledby="reglamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="reglamentoModalLabel">Reglamento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="container px-4">
          <h2 class="pb-2 border-bottom centrado"><img src="public/img/logos/logoPLN.jpg" style="max-width: 40px;" alt=""> Reglamento del Partido Liberal de Nicaragua como organización de oposición</h2>
          <p class="centrado text-emphasis fw-semibold">APROBADOS POR EL COMITÉ EJECUTIVO REUNIDA EN SESIONES 
            EXTRAORDINARIAS EN LA CIUDAD DE MIAMI, FLORIDA DURANTE LOS DIAS 4 Y 5
          DE MARZO DEL 2023</p>
          <hr>
          <h5 class="centrado">COMITE EJECUTIVO FUNDACIONAL</h5>
          <p class="centrado">Lic. Alvaro Somoza Urcuyo</p>
          <p class="centrado">Don Eli Cabezas Boza</p>
          <p class="centrado">Dr. Enrique Zelaya Cruz</p>
          <p class="centrado">Lic. Luis Barreto Novoa</p>
          <p class="centrado">Don Jorge Estrada Vélez</p>
          <p class="centrado">Ing. Arlington Orozco</p>
          <p class="centrado">Ing. Henry Alvarez</p>
          <p class="centrado">Secretario: Dr. Cesar Napoleón Grijalva Hinojo</p>
          
          <p class="centrado small">COMISIONES Planificación: Acciones/ Monitoreo, seguimiento del plan de acción. Relaciones Exteriores: Enlace con organismos y personalidades. Comunicación: divulgación y relación con los medios. Afiliación y coordinación: Registro de estructuras y comunicación. Seguimiento y Control: de tareas según estructura funcional. Auditoria: Supervisión de ingresos y ejecución del gasto.</p>
          <p class="centrado small">Inscripción como organización
                    Realizada en el Estado de la Florida, USA el 15 de Agosto del 2023 con el numero N23000009852, Estatutos de la Florida 15.16
                    Casa Provisional del Partido Liberal de Nicaragua
                    Dirección: 625 Biltmore Way, apt 1207 Coral Gables Florida 33134,
                    Miami, Florida, USA – Teléfono 01 (786) 564 1604</p>

          <br>
          <h4 class="centrado">Nuestros valores:</h4>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <div class="feature col">
              <h3 class="fs-2 text-body-emphasis">Misión</h3>
              <p>Crear un núcleo de unidad.</p>
              <a href="#flush-collapseOne">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Contenido</button>
              </a>
            </div>

            <div class="feature col">
              <h3 class="fs-2 text-body-emphasis">Visión</h3>
              <p>Ser la principal fuerza de oposición.</p>
              <a href="#flush-collapseTwo">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Contenido</button>
              </a>
            </div>

            <div class="feature col">
              <h3 class="fs-2 text-body-emphasis">Justificación</h3>
              <p>Contrarestar la amenaza sandinista.</p>
              <a href="#flush-collapseThree">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Contenido</button>
              </a>
            </div>

          </div>
        </div>




          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Misión: contenido
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Consiste en crear un núcleo de unidad de todos los opositores al sandinismo y cualquiera de sus expresiones, iniciando en esta etapa como una organización de oposición de orden liberal con estructuras de coordinación como de representaciones territoriales y la afiliación de participantes dentro y fuera de Nicaragua.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Visión: contenido
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" dat-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Lograr ser la principal fuerza de oposición, incorporar a la diáspora para que ejerzan sus derechos con sus representantes vía acciones reales como de promover el voto en el exterior en las primeras elecciones con condiciones, lograr representación clandestina en cada municipio y departamento a lo interno de Nicaragua preparándonos para en su momento inscribirnos como partido, participar y ganar las primeras elecciones cuando se existan condiciones.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Jusitifcación: contenido
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Ante la amenaza de organizaciones de oposición que cohabitan con grupo o personas que creen en el rescate del sandinismo y haciendo honor a las mayorías demostradas en procesos electorales, hemos fundado el Partido Liberal de Nicaragua que inicia como una organización política encargada de proveer a los Nicaragüenses de un espacio bajo los principios liberales para que con la ayuda de Dios y de todos lograr evitar un retorno al pasado criminal de los 80´s así como rechazar a cómplices que ahora se encuentran infiltrados y liderando grupos opositores.</p>
                </div>
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





  <!-- <div class="album py-5 bg-body-tertiary" style="background-image: url(img/fondos/P5040009.JPG);"> -->
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInLeft">
            <video src="public/videos/jorge_esgtrada.mp4" width="" height="400" controls></video>
            <div class="card-body">
              <p class="card-text">El contenido del video se basa en las acciones de apoyo realizadas por Don Jorge Estrada, miembro del comité ejecutivo provisional del Partido Liberar de Nicaragua</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInUp">
          <img src="public/img/fondos/nicaragua2.jpeg" height="225" alt="" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInRight">
          <img src="public/img/fondos/nicaragua3.jpeg" height="225" alt="" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









<!-- formulario solicitud afilicacion  fondo azul-> style="background-color: #E0ECF8;" -->
<br>
<section id="formulario_solicitud" style="background-color: #E0ECF8;">

  <div class="container">

    <div class="row g-5">



      
      <div class="col-md-12">
        <br>
        <h4 class="mb-3 text-center">Solicitud de afiliación</h4>

        <hr class="my-4">
        <h5>Datos personales</h5>
        <br>

        <form action="<?= base_url('solicitudes/crear') ?>" method="POST" id="formulario_solicitud" name="formulario_solicitud" enctype="multipart/form-data" class="needs-validation" novalidate>
          <input type="hidden" name="_method" value="POST">
          <?php echo csrf_field(); ?>

          <div class="row g-3">


            <br>

            <div class="col-sm-5 form-floating">
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>" placeholder="Nombre">
              <label for="nombre">Nombre*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
              </p>
            </div>

            <div class="col-sm-5 form-floating">
              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= set_value('apellidos'); ?>" placeholder="Apellidos">
              <label for="apellidos">Apellidos*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('apellidos'); ?>
              </p>
            </div>
            


            <div class="col-sm-3 form-floating">
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= set_value('fecha_nacimiento'); ?>" placeholder="Fecha de nacimiento*">
                <label for="fecha_nacimiento">Fecha de nacimiento*</label>
                <p class="small" style="color:red">
                  <?= validation_show_error('fecha_nacimiento'); ?>
                </p>              
            </div>








            <div class="col-sm-2 form-floating">
                

                    <select class="form-select" id="estado_id" name="estado_id">
                        <option value=""><label for="estado_id" id="estado_id_label">Seleccione País de residencia*</option>
                        <?php foreach($estados as $estado): ?>
                            <option value="<?= $estado['id'] ?>"><?= $estado['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                    <p class="small" style="color:red">
                        <?= validation_show_error('estado_id'); ?>
                    </p>

            </div>

            



          

            <!-- <div class="col-sm-4 form-floating">
                <div class="">
                    <select class="form-select" id="departamento_id" name="departamento_id" hidden>
                        <option value="">Seleccionar Estado, Región, Comunidad, Departamento</option>
                        <?php foreach($departamentos as $departamento): ?>
                            <option value="<?= $departamento['id'] ?>"><?= $departamento['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="small" style="color:red">
                        <?= validation_show_error('departamento_id'); ?>
                    </p>
                </div>
            </div>

            <div class="col-sm-4 form-floating">
                <div class="">
                    <select class="form-select" id="municipio_id" name="municipio_id" hidden>
                        <option value="">Ciudad, Municipio:</option>
                        <?php foreach($municipios as $municipio): ?>
                            <option value="<?= $municipio['id'] ?>"><?= $municipio['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="small" style="color:red">
                        <?= validation_show_error('municipio_id'); ?>
                    </p>
                </div>
            </div> -->



            <div class="col-sm-3 form-floating">
              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= set_value('ciudad'); ?>" placeholder="Ciudad*" hidden>
              <label for="ciudad" class="form-label" id="ciudad_label" hidden>Ciudad/Municipio*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('ciudad'); ?>
              </p>
            </div>


            <div class="col-sm-3 form-floating">
              <input type="text" class="form-control" id="pais" name="pais" value="<?= set_value('pais'); ?>" placeholder="Pais*" hidden>
              <label for="pais" class="form-label" id="pais_label" hidden>Estado, Región, Comunidad, Dpto*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pais'); ?>
              </p>
            </div>






            <hr class="my-4">
            <h5>Identificación</h5>

            <div class="col-sm-1" id="tiene_cedula" hidden>
                <label for="estado_id" class="col-form-label">
                  ¿Tiene cédula?
                </label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula">
                <label class="form-check-label" for="radio_tiene_cedula">
                  No
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula" checked>
                <label class="form-check-label" for="radio_tiene_cedula">
                  Si
                </label>
              </div>
            </div>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= set_value('cedula'); ?>" placeholder="Cedula Nº:" hidden>
              <label for="cedula" class="form-label" id="cedula_label" hidden>Cédula Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>
            </div>
            
            <div class="col-sm-3">
              <label for="cedula_img" class="form-label" id="cedula_img_label" hidden>Imagen del documento:</label>
              <input type="file" class="form-control" accept="image/jpeg, image/png" id="cedula_img" name="cedula_img" value="<?= set_value('cedula_img'); ?>" hidden>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula_img'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">

              <input type="text" class="form-control" id="pasaporte" name="pasaporte" value="<?= set_value('pasaporte'); ?>" placeholder="Pasaporte Nº:" hidden>
              <label for="pasaporte" class="form-label" id="pasaporte_label" hidden>Pasaporte Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pasaporte'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">
              
              <input type="text" class="form-control" id="licencia" name="licencia" value="<?= set_value('licencia'); ?>" placeholder="Licencia Nº:" hidden>
              <label for="licencia" class="form-label" id="licencia_label" hidden>Licencia Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('licencia'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">
              
              <input type="text" class="form-control" id="residencia" name="residencia" value="<?= set_value('residencia'); ?>" placeholder="Residencia Nº:" hidden>
              <label for="residencia" class="form-label" id="residencia_label" hidden>Residencia Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('residencia'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Datos de contacto</h5>

            <div class="col-sm-2">
              <label for="whatsapp" class="form-label">Whatsapp Nº:</label>
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= set_value('whatsapp'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('whatsapp'); ?>
              </p>
            </div>

            <div class="col-sm-4">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('email'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Tipo de participación</h5>
            

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="afiliado" name="afiliado" checked>
              <label class="form-check-label" for="flexCheckDefault">
                Afiliado
              </label>
              <p class="small" style="color:red">
                <?= validation_show_error('afiliado'); ?>
              </p>
            </div>


            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="cargo" name="cargo">
              <label class="form-check-label" for="flexCheckChecked">
                Cargo
              </label>
              <p class="small" style="color:red">
                <?= validation_show_error('cargo'); ?>
              </p>
            </div>
            <div class="col-sm-4">
              <label for="posicion" class="form-label">Posición:</label>
              <input type="text" class="form-control" id="posicion" name="posicion" value="<?= set_value('posicion'); ?>">
              <p class="small" style="color:red">
                <?= validation_show_error('posicion'); ?>
              </p>
            </div>
            
          </div>
          <div class="centrar_div">
            <br>              
            <button class="btn btn-primary btn-lg" type="submit"><i class="bi bi-send"></i> Enviar solicitud</button>
          </div>
          <br>

          <br>
        </form>
      </div>
    </div>

  
  
  </div>





</section>




<script>



  $(".checkbox").on('change', function() {
    if ($(this).is(':checked')) {
      $(this).attr('value', 'true');
      var check = $(this).val();
      console.log(check);
      //$('#afiliado value').val(check);
      //console.log($('#afiliado').val(check));
    } else {
      $(this).attr('value', 'false');
      var check = $(this).val();
      console.log(check);
      //$('#afiliado').val(check);
      //console.log($('#afiliado').val(check));
    }
  });




  //muestra campos segun el pais elejido en el campo estado_id
  $(document).ready(function () {
    $(document).on('change','#estado_id',function() {

      var pais = document.getElementById("estado_id").value;
      /*if(pais == 1 | pais == 5) { // para paises con cedula
        $("#cedula").prop('hidden', false);
        $("#cedula_label").prop('hidden', false);
        $("#tiene_cedula").prop('hidden', false);
      } else {
        $("#cedula").prop('hidden', true);
        $("#cedula_label").prop('hidden', true);
        $("#tiene_cedula").prop('hidden', true);
      };*/

      $("#cedula_img_label").prop('hidden', false);
      $("#cedula_img").prop('hidden', false);
      $("#cedula").prop('hidden', false);
      $("#cedula_label").prop('hidden', false);
      $("#tiene_cedula").prop('hidden', false);
      $("#departamento_id").prop('hidden', false);
      $("#municipio_id").prop('hidden', false);
      $("#ciudad").prop('hidden', false);
      $("#ciudad_label").prop('hidden', false);
      $("#pais").prop('hidden', false);
      $("#pais_label").prop('hidden', false);

 
    });
  });


  

  // activa el campo nº de cedula o los campos alternativos pasaporte, licencia...
  $(document).ready(function () {
    $(document).on('click','#tiene_cedula',function() {
      var cedula = document.getElementById("radio_tiene_cedula").checked;
      if(cedula == true) {
        $("#cedula").prop('hidden', true);
        $("#cedula_label").prop('hidden', true);
        $("#pasaporte").prop('hidden', false);
        $("#pasaporte_label").prop('hidden', false);
        $("#licencia").prop('hidden', false);
        $("#licencia_label").prop('hidden', false);
        $("#residencia").prop('hidden', false);
        $("#residencia_label").prop('hidden', false);
      } else {
        $("#cedula").prop('hidden', false);
        $("#cedula_label").prop('hidden', false);
        $("#pasaporte").prop('hidden', true);
        $("#pasaporte_label").prop('hidden', true);
        $("#licencia").prop('hidden', true);
        $("#licencia_label").prop('hidden', true);
        $("#residencia").prop('hidden', true);
        $("#residencia_label").prop('hidden', true);
      };
    });
  });







</script>



    



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>