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

      <div class="centrado">
        <img src="public/img/logos/logoPLN.jpg" style="max-width: 30%;" alt="">
      </div>

      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
          <h2 class="fw-bold text-body-emphasis">Tu participación es importante para el país.</h2>
          <p class="text-body-secondary">Afíliate. Rellena el formulario con tus datos y serás un miembro del cambio.</p>
          <a href="#formulario_solicitud" class="btn btn-primary btn-lg"><i class="bi bi-table"></i> Regístrate</a>
        </div>

        <div class="col">

          <div class="row row-cols-1 row-cols-sm-2 g-4">
            
            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reglamentoModal"><i class="bi bi-table"></i> Dirección, Misión y Visión</button>

              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#declaracionModal"><i class="bi bi-table"></i> Reglamento</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#metodologiaModal"><i class="bi bi-table"></i> Metodología</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
              <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#empadronamientoModal"><i class="bi bi-table"></i> Empadronamiento</button>
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


        <p>
        Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 1
PROYECTO EMPADRONAMIENTO
Información general proyecto Voto en el Exterior según Articulo 122 Ley 331 electoral
Contenido
1. Introducción
1.1. Misión
1.2. Visión
2. Conceptos preliminares
2.1. El proceso de planificación y el documento del proyecto
3. Guión básico del proyecto
3.1. Alcances
3.2. Justificación
3.3. Preparación
3.4. Situación actual
3.5. Productos
3.7. Organización y metodología
3.8. Recursos necesarios, presupuesto y financiación
4. Diseño de evaluación y seguimiento
5. Bibliografía
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 2
1. Introducción
La Vocería en Unidad de la Oposición en una clara demostración de la necesidad de pasar a la acción, ha iniciado con el proyecto de nación enfocado a la defensa de los derechos habilitantes de los ciudadanos residentes fuera del territorio nacional para que puedan votar cuando existan condiciones, donde los beneficiarios serían los residentes en el exterior y descendencia que migraron antes del 2018 como los que lo hicieron después en el reciente éxodo causado por la persecución política o por carencias económicas.
1.1. Misión,
Consiste en la habilitación de una plataforma tecnológica accesible por todos en ambiente WEB, formulación de un minucioso como coherente proyecto así como el gestiona miento de los fondos necesarios para iniciar el proyecto, administrar el crecimiento y lograr cumplir el objetivo.
1.2. Visión,
En base al Artículo 122 de la Ley electoral 331, el proyecto aportaría los componentes propios para redactar la reglamentación que actualmente es inexistente. Lograr el empadronamiento virtual de ciudadanos residentes en el exterior para que puedan votar desde el área de su residencia cuando existan condiciones.
Habilitación de mecanismos para realizar consultas a los registrados, registro de propuestas de candidatos para cargos y proceso de elección electrónica.
2. Conceptos preliminares.
2.1. QUÉ se quiere hacer: Habilitar una plataforma en entorno web para el registro de ciudadanos y descendientes residentes en el exterior carentes de cedula de identidad nicaragüense, registro de ciudadanos que salieron del país después del año 2018, registro de cedulas después de junio 2018, procedimientos de consulta con los registrados, registro de candidatos a cargos de estructura y elección además de toda la estructura de comunicación de registros a incluir hacia el CSE como mecanismo de votación electrónica en las próximas elecciones con condiciones.
2.2. POR QUÉ se quiere hacer: Para reglamentar el artículo 122 de la ley electoral para permitir que por primera vez puedan votar los ciudadanos desde el exterior.
2.3. PARA QUÉ se quiere hacer: objetivos
- Objetivos generales: Plataforma en entorno WEB accesible a los ciudadanos residentes en el exterior que suponen un 20% del padrón electoral y quienes salieron después del 2018, permitir que puedan votar electrónicamente.
- Objetivos específicos: Lograr que la diáspora se sienta tomada en cuenta y que sea un factor decisivo en las tomas de decisiones desde la oposición por medio de las consultas a realizarles como en la participación en la estructura organizativa.
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 3
- Objetivo operativo Indicadores de evaluación continuas por paneles de control de registros de la diáspora y sus descendientes como la vinculación al padrón del 2016 para validación y preparación de los que tenían cedulas y salieron después del 2018, registro de cedulas de identidad emitidas después de junio 2016 las cuales no han sido publicadas a la fecha y que son necesarias para que aquellos ciudadanos que cumplan con esta condición se registren con el objetivo de lograr de alguna manera tener un padrón lo más actualizado posible.
-Objetivos de presión política la plataforma está diseñada para emitir listas por ubicación geográfica de los registrados que son ciudadanos de los países donde residen, de manera que se puedan dirigir por medio de cartas a sus representantes para pedir acciones que logren disminuir la capacidad del régimen y en consecuencia forzarlo a transitar hacia el retorno al orden democrático.
2.4. CUÁNTO se quiere hacer: El proyecto está dirigido a los más de 1.2 millones de nicaragüenses residentes en el exterior que salieron en los distinto éxodos anterior al 2018, además de los más de 700 mil que salieron después del 2018 quienes no podrían votar si se dan elecciones estando fuera del país por la inexistente reglamentación del artículo 122 de la ley electoral, y que el proyecto de empadronamiento podrá hacer realidad que puedan votar. La actualización del padrón se estima que no están incluidos en ningún padrón publicado las cedulas desde el 2016 hasta la fecha, que constituyen dos periodos presidenciales donde el incremento general es de 300 mil cedulas por periodo que en total será de 600 mil que los cedula habientes podrán registrar directamente o bien para cuando existan condiciones estaríamos preparados para el registro de los referidos.
2.5. DÓNDE se quiere hacer: El proyecto por arquitectura en entorno web podrá ser accesible de cualquier dispositivo que cuente con conexión a internet.
2.6. CÓMO se va a hacer: actividades y tareas, metodología y organización.
2.6.1. Registro de cedulas no fueron incluidas en el padrón del 2016 de los ciudadanos nacidos a partir del 2001 con la edad de ley de 16 años para tener derecho a cedula.
(Cabe mencionar que en el proceso electoral del 2021 no se presentó el padrón electoral)
2.6.2. Registro de ciudadanos con cedulas que migraron a partir del 2016 a la fecha, con el objetivo de hacer valer su derecho al voto desde el exterior.
2.6.3. Registro de ciudadanos residentes en el exterior que nunca han tenido cedula nicaragüense, donde la sustentación será el documento de naturalización en el país de residencia así como el de sus descendientes vía la partida de nacimiento asociada al o a sus progenitores pre registrados.
2.6.4. Procesos para el soporte de la identidad de los registrados:
Registro de documentos oficiales obtenidos de los países donde residen por los residentes en el exterior.
2.6.5. Registro de documentos oficiales obtenidos de los países donde residen por los descendientes de los residentes en el exterior.
2.6.6. Inclusión de cedulas ya existentes o no incluidas en el padrón.
2.7. Procesos de auditoria para validación de soporte de los registrados:
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 4
2.7.1. Validación de lotes de documentos soportes registrados en las instituciones emisoras de los países donde residen en el exterior. (Ciudadanías y partidas de nacimiento). (Cedulas de residentes en el exterior).
2.7.2. Validación de lotes de cedulas emitidas antes y después del 2016, validadas con el padrón o nuevas para los nacidos a partir del 2001 y que recibieron cedulas.
2.7.3. Control geográfico y por áreas de los registros para determinar los lotes a ser activados según lugar de residencia.
2.8. Procesos de enlace con las autoridades de Nicaragua:
Remisión de lotes de inscritos según países de residencia, mecanismos de votación con boletas autorizadas por el CSE de boleta con numero único para votar.
2.9. Procesos de votación:
Plataforma web para ejercer el voto con las opciones de partidos.
Reporte por país y área para conteo paralelo oficial, y remisión de los resultados al CSE.
2.10. CUÁNDO se va a hacer:
El proyecto inicia con una formulación definitiva a realizarse en 60 días a partir de la aprobación por la entidad financiadora o entidades en caso que sea más de una.
El desarrollo de la plataforma tecnológica llave en mano como de todos los manuales de tanto transaccionales, de generación de reportes, auditoria y monitoreo con duración de 90 días para contar con la plataforma operativa, y finalmente habrá un tiempo de 45 días para la realización de guiones de prueba de todas las funcionalidades que incluye el proyecto según sus alcances.
2.11. A QUIÉNES va dirigido: destinatarios o beneficiarios
Los destinatarios son los ciudadanos nicaragüenses según se describe en el (punto 2.6), así como para cualquier fin estadístico que puedan solicitar organizaciones debidamente autorizadas, ser el soporte de intercambio de información con el Consejo Supremo Electoral al momento de la celebración de las próximas elecciones con condiciones, como herramienta de validación en aras a conservar el padrón desde su punto inicial del 2016 a la fecha de la puesta en marcha del proyecto, evitando así la perdida de la principal base de datos a nivel de registro de personas habilitadas para ejercer el voto tanto dentro como fuera del territorio nacional.
2.12. QUIÉNES lo van a hacer: El proyecto estará cargo de personal con demostrada experiencia en procesos electorales como del tipo de información que tiene el padrón electoral, con la participación de un equipo de programación encargados del desarrollo de la aplicación como de la correspondiente empresa totalmente certificada donde será alojado el aplicativo. En lo que refiere a la correcta sostenibilidad, estará a cargo de un equipo de personas encargadas de gerencia la implementación del proyecto.
2.13. CUANTO TIEMPO va a durar el proyecto: Todo el tiempo hasta que se celebren elecciones con condiciones, ya que siempre tendrá la debida justificación por tratarse de un esfuerzo de nación para la conservación de la información de la población votante, teniendo en cuenta que la migración continua, se emiten nuevas cedulas y los descendientes de los residentes en el exterior también se incrementan.
2.10. CON QUÉ se va a hacer: recursos humanos, materiales, técnicos y económicos, y forma de financiación. Presupuesto.
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 5
3. Guion básico del proyecto
3.1. Alcances
-Lograr la reglamentación del artículo 122 de la Ley 331, que permitirá empadronar y votar a todos los ciudadanos residentes en el exterior así como a aquellos que tienen cedula y residen temporalmente o están en tránsito.
-Que el compromiso debe de ser que el voto desde el exterior se haga realidad en las primeras elecciones a celebrarse y que existan condiciones habilitantes.
-Crear confianza en la diáspora para que de alguna manera puedan apoyar en la lucha por la libertad, acciones que harían en su carácter de ciudadanos del país donde residen utilizando los mecanismos habilitados y dirigidos a sus representantes según país, estado o área de residencia.
-Que los emisores de remesas no sigan limitados a solo ser proveedores de sus familiares, si no que puedan ejercer su derecho al voto e incidir en el futuro de la nación e inclusive tener la fuerza para la definición de resultados, ya que los residentes en el exterior son aproximadamente un 20% del padrón sin incluir a sus descendientes y que con la inclusión de estos sobrepasan al 30% sobre el total del padrón.
3.2. Justificación,
La habilitación del derecho al voto por primera vez en la historia, donde los beneficiarios residentes en el exterior que podrán ejercer su derecho son 1.3 millones correspondientes a los que migraron antes del 2018, mas 700mil Aproximadamente del más reciente exilio, sin considerar el número de descendientes mayormente de los migrantes antes del 2018 y que calculando a un descendiente por cada uno de los 1.3 millones el beneficio seria a 2.6mill de los que migraron antes del 2018, más los 700mil que salieron después del 2018 con un resultado total que ronda los 3millones de ciudadanos correspondiente al 50% del padrón total quienes tendrán el derecho de votar , aclarando que hasta la fecha por no existir voluntad, ni reglamentación como tampoco medios ha impedido que los ciudadanos puedan votar desde el exterior.
3.3. Preparación,
La Vocería en Unidad de la oposición ha diseñado una plataforma virtual que almacenara la información en un servidor totalmente seguro, incorpora la base de datos de ciudadanos y permite el ingreso de nuevos registros, contamos con el diseño técnico y conceptual de procesos de registro y validación que culminan con la inscripción, votación y tabulación de resultados así como de otras funcionalidades para procesos de consulta vía encuestas y elección de aspirantes según el tipo de cargo en concurso.
3.4. Situación actual,
Ningún ciudadano puede ejercer su voto desde el exterior, ya que aun existiendo el artículo 122 – LE 331 no existe reglamentación para activarlo, no existe un padrón de residentes en el exterior sin cedula ni el de sus descendientes, no existe una modalidad de activar como residentes en el exterior a los que sí tienen cedulas pero residen fuera de Nicaragua.
3.5. Productos
3.5.1. Opción primera
Empadronamiento de Ciudadanos y descendientes
Residentes en el exterior sin cedula.
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 6
3.5.2. Opción segunda
Empadronamiento de Ciudadanos residentes en el
Exterior inscritos en el padrón 2016.
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 7
3.5.3. Opción tercera
Empadronamiento de Ciudadanos residentes en
el exterior inscritos en el padrón después del 2016.
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 8
3.6. Organización de target y metodología
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 9
3.6.1. El target son los ciudadanos residentes en el exterior producto de los éxodos migratorios antes del 2018 como después hasta la fecha con mayor numero en Estados Unidos Costa Rica y otros países como: Costa Rica, España, Panamá, Canadá, Guatemala, El Salvador, Honduras: México, Venezuela y con números menores en otros países de sur américa y Europa. No obstante cabe mencionar que la migración de Nicaragüenses continua y cada vez con mayor intensidad.
En Estados Unidos habitan 1,072.000 Ciudadanos entre los que migraron antes del 2018 hasta la fecha, los estados donde migran principalmente son:
3.6.2. Estados USA
Florida
California
Texas
Nueva York
Nueva Jersey
Maryland
Virginia
Luisiana
Carolina del Norte
Georgia
Arizona
Nuevo México
Nevada
Utah
Washington
Las 25 ciudades USA con mayor población de Nicaragüenses
Los Ángeles, San Francisco - Orlando, Florida - Oakland, California - Houston - San José, California - Kendale Lakes, Florida - Miami, Florida Sweetwater, Florida - Modesto – Kendall, Florida – The Hammocks, Florida - Kendall West, Florida - Miami Gardens, Florida West Little River, Florida - Richmond West, Florida - Country Club, Florida Hayward, California - Miramar, Florida -
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 10
South San Francisco, California - South Miami Heights, Florida - Metairie, Luisiana - Pembroke Pines, Florida - Homestead, Florida San Diego - 3.6.3. Otros países: Costa Rica: 350.854 España: 61.563 Panamá: 28,112 Canadá: 13.840 Guatemala: 9.211 El Salvador: 7.956 Honduras: 7.943 México: 4.303 Venezuela: 1.927
3.7. Recursos necesarios.
3.7.1. Los primeros recursos necesarios serán destinados a la presentación integral del proyecto que diseño del sistema informático de todos los módulos que lo conforman, costos herramientas informáticas.
3.7.2. Primer desembolso: Tiene un valor de U$ 10,000 para la elaboración de los TDR Términos de Referencia de la plataforma informática y que será realizado en un plazo de 60 días a partir del recibo del aporte.
3.7.3. El alcance de la formulación integral del proyecto tendrá un valor según los distintos rubros en materia de costos necesarios, la fecha de duración del proyecto podrá tener una variación en dependencia de los fondos a disponer como de la velocidad y cobertura que deseamos incluir en el proyecto.
3.8. Rubros de Gastos,
3.8.1. Costos relacionados a la divulgación según áreas donde residen los nicaragüenses servicios de plataformas como Facebook, Etc. y costos de administración con una proyección entre dos y tres años.
Información general proyecto Voto en el Exterior según Articulo 122- Ley 331 electoral
Para comunicaciones escribir a voceriaenunidad@gmail.com
Página 11
3.8.2. Contacto con organizaciones u otros concentradores en cuanto a organización con la comunidad Nicaragüense en las distintas áreas y países donde residen, con el objetivo de realizar foros informativos e intercambio de información en aras a preparar una base lo más extensa posible para que vía su registro en la plataforma de empadronamiento sean parte activa del proyecto.
3.8.3. Acercamiento presencial con las comunidades, incluirá la visita a los estados de EEUU donde residen nicaragüenses así como a los Países según la lista detallada en el punto 3.6.2. y 3.6.3 del presente documento.
3.8.4. Divulgación promocional vía redes sociales, Activando avisos dirigidos a las poblaciones donde residen ciudadanos nicaragüenses con usuarios de FB y otros que serán dirigidos a nuestras direcciones tanto en las redes sociales como a nuestra página Web.
3.8.5. Asistencia virtual de información y de registro, Se habitara un servicio de Cal Center para atender a las consultas de los interesados o registrados.
3.8.6. Administración del proyecto, A cargo de un profesional quien fue el creador del proyecto y especialista en manejo de la información, las funciones del administrador como del personal de Call Center estarán en funciones mientras dure el proyecto.
3.9. MAS INFORMACION SOBRE EL COSTO DEL PROYECTO Y DETALLES
A exponerse en una reunión a concertar con el financiador interesado
        </p>


        




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
            <img src="public/img/fondos/nicaragua1.jpeg" height="225" alt="" >
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





            <div class="col-sm-4 form-floating">
                
                <div class="">
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
            </div>


            <!-- <div class="col-sm-2" hidden id="tiene_cedula">
              <label for="estado_id" class="col-sm-2 col-form-label">
                    <?= lang('App.productos.grupo_productos') ?>
                    ¿Tiene cédula?
                </label>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="tiene_cedula_check" checked>
                <label class="form-check-label" for="tiene_cedula_check">Sí</label>
              </div>
            </div> -->


            
            
            <div class="col-sm-2" id="tiene_cedula" hidden>
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

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= set_value('cedula'); ?>" placeholder="Cedula Nº:" hidden>
              <label for="cedula" class="form-label" id="cedula_label" hidden>Cédula Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>
            </div>
            
            <div class="col-sm-4">
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

            <br>
            <hr class="my-4">


            
            

            

            

            

            

          

            <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar solicitud</button>


            <br>
          </div>
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