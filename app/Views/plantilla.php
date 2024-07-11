<!DOCTYPE html>
<html lang="es" class="h-100" data-bs-theme="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">




    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>







    <link href="<?= base_url() ?>css/estilo.css" rel="stylesheet">
    <link href="<?= base_url() ?>css/navbar.css" rel="stylesheet">






</head>

<body class="d-flex flex-column h-100" data-bs-theme="">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
    
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
        
        





        <?php echo $this->include('menu'); ?>

        <div class="container">
            <?php $this->renderSection('contenido') ?>
        </div> 

    </main>

    <footer class="footer mt-auto py-3 bg-secondary">
        <div class="container">
            <span class="text-body-secondary"> 2024 | Códigos de Programación</span>
            
        </div>
    </footer>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
    


    


</body>

</html>