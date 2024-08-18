<!DOCTYPE html>
<html lang="es" class="h-100" data-bs-theme="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    
    <!-- <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->



    <link href="https://cdn.datatables.net/2.1.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.1.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />">



    <link href="<?= base_url() ?>public/css/estilo.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/botones_redes.css" rel="stylesheet">

    <link href="<?= base_url() ?>public/img/logos/logoPLN.jpg" rel="icon" type="image/x-icon">

    


 

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script scr="<?= base_url() ?>public/js/anidaSelect.js"></script>
    

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.print.min.js"></script>



 
    

    <!-- <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.0/js/buttons.print.min.js"></script> -->






    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    
    




</head>

<body class="d-flex flex-column h-100" >

    <!-- Begin page content -->
    <main>
    
        <?php
            $session = session();
        ?>
        
        <?php if($session->getFlashdata('mensaje')) { ?>
    
            <div class="toast-container position-fixed bottom-0 end-0 p-6">
                <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        <div class="d-flex gap-4">
                            <span><i class="fa-solid fa-circle-check fa-lg icon-success"></i></span>
                            <div class="d-flex flex-column flex-grow-1 gap-2">
                                <div class="d-flex align-items-center">
                                    <span class="fw-semibold"><i class="bi bi-shield-check"></i> <?= $session->getFlashdata('mensaje'); ?></span> <!-- imprime el mensaje que viene desde el create o delete del controller -->
                                    <button type="button" class="btn-close btn-close-sm ms-auto" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                                </div>
                                <small><?= (date('d.m.y')) ?></small>
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





        <?php if($session->getFlashdata('mensaje') == 'Solicitud enviada') { ?>

            <script>
                swal("Envío correcto!", "Su solicitud se ha procesado!", "success");
            </script>

        <?php } ?>

        <?php if($session->getFlashdata('mensaje') == 'Error(s) en formulario') { ?>

            <script>
                swal("Hay errores en el formulario!",  "Revíse su solicitud!", "error");
            </script>

        <?php } ?> 
        
        


        

        <div class="main-container">
            <?= $this->include('menu'); ?>
            <?= $this->renderSection('contenido') ?>
        </div> 

    </main>



    <footer class="py-3 my-4">
        <p class="text-center text-body-secondary">&copy; 2024 Partido Liberal de Nicaragua <img src="<?= base_url(); ?>public/img/fondos/bandera_nicaragua.png" style="max-width: 30px; display:inline-block;" alt=""></p>
        
    </footer>




    


</body>


    <script>
        // funcion para rellenar un select en funcion del valor elejido en otro select. hay que poner en el segundo select un data-????????=valor_a_buscar
        $(document).ready(function () {
            $(function() {
                $(document).on('change', '#departamento_id', function() {
                    var departamento_codigo = $(this).val();
                        $('#municipio_id option').each(function() {
                            var municipioDepartamento = $(this).data('departamento');
                            if (municipioDepartamento == departamento_codigo || $(this).val() == "") {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                    $('#municipio_id').val('');
                });
            });
        });
    </script>






</html>