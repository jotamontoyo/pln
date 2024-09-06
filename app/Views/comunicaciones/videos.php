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
                  <div>
                    <?= $this->include('botones-menu'); ?>
                  </div>
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
                    <a class="" href=<?= base_url() . "comunicaciones/videos" ?> style="color: red;">
                      Vídeos
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

            <div>


              <!-- album -->
              <div class="album py-5 bg-body-tertiary">
                <div class="container">
  
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInLeft">
                        <video src="../public/videos/jorge_esgtrada.mp4" controls></video>
                        <div class="card-body">
                          <p class="card-text">El contenido del video se basa en las acciones de apoyo realizadas por Don Jorge Estrada, miembro del comité ejecutivo provisional del Partido Liberar de Nicaragua</p>
                        </div>
                      </div>
                    </div>
  
                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInUp">
                        <div class="centrado">
                          <img src="../public/img/comite/comandante_henry.jpg" alt="" >
                        </div>
                        <div class="card-body">
                          <p class="card-text">El presidente Reagan recibió la  Dr. y Comandante Henry (Enrique Zelaya) miembro del estado mayor de la contra.</p>
                        </div>
                      </div>
                    </div>
  
                    <div class="col">
                      <div class="card card-album-videos shadow-sm animate__animated animate__backInRight">
                        <div class="centrado">
                          <iframe src="https://www.youtube.com/embed/tHTVkORVWdg?si=gwWDCaCmaXX4Jshd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                          <p class="card-text">Álvaro Somoza Urcuyo, hijo del presidente Luis Somoza y director de la la alianza por la Libertad con miles de afiliados y conductor del programa semanal "una hora con Álvaro Somoza".</p>
                        </div>
                      </div>
                    </div>
                          
                    <div class="col">
                      <div class="card card-album-videos shadow-sm">
                        <div class="centrado">
                          <img src="../public/img/comite/cesar_grijalba.jpg" alt="" >
                        </div>
                        <div class="card-body">
                          <p class="card-text">Dr. César N Grijalva. Abogado, Doctor en Jurisprudencia, Ciencias Políticas, Administración Pública, Desarrollo Internacional. Experto en temas de gobierno de transición, representante de organizaciones.Trabajo Social.</p>
                        </div>
                      </div>
                    </div>
                          
                    <div class="col">
                      <div class="card card-album-videos shadow-sm">
                        <div class="centrado">
                          <img src="../public/img/comite/eli_cabezas.jpg" alt="" >
                        </div>
                        <div class="card-body">
                          <p class="card-text">Don Eli Cabezas desde los años 80's principal líder liberal de la diáspora y del nuevo exilio del canada.</p>
                        </div>
                      </div>
                    </div>
                          
                    <div class="col">
                      <div class="card card-album-videos shadow-sm">
                        <iframe src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="card-body">
                          <p class="card-text">Texto</p>
                        </div>
                      </div>
                    </div>
                          
                    <div class="col">
                      <div class="card card-album-videos shadow-sm">
                        <div class="centrado">
                          <img src="../public/img/comite/harlinton_orozco.jpg" alt="" >
                        </div>
                        <div class="card-body">
                          <p class="card-text">Harlinton Orozco y Henry Álvarez de Unión de Exiliados, formado por líderes de tranques durante la rebelion.</p>
                        </div>
                      </div>
                    </div>
                          
                    <div class="col">
                      <div class="card card-album-videos shadow-sm centrado">
                        <iframe src="https://www.youtube.com/embed/f03tKMgzPl0?si=mwvaziFid7C1-Tx3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="card-body">
                          <p class="card-text">Podcast de Don Álvaro Somoza. El Robo del Siglo: Cómo Maduro se Burló de la Democracia en Venezuela.</p>
                        </div>
                      </div>
                    </div>
                      
                    <div class="col">
                      <div class="card card-album-videos shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
                    
                    
                    
        </div>
                    


    </div>








<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>