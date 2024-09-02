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
    <h1 class="centrado display-4"><a href="<?= base_url(); ?>"><b>PARTIDO LIBERAL DE NICARAGUA <img class="img_logo_rotulos" src="../public/img/logos/logoPLN.jpg" alt=""></b></a></h1>
  </div>


 



</div>




<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>