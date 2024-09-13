<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>




    <br>

    <br><br>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="container-breadcrumb breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
          <li class="breadcrumb-item">
            <a href=<?= base_url(); ?> style="color: red;">
              <i class="bi bi-house-fill"></i>
              Inicio
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href=<?= base_url('afiliados'); ?> style="color: red;">
              Afiliaciones
            </a>
          </li>
        </ol>
      </nav>
    </div>

    <div class="table-container">

        <table id="table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Creado por</th>
                    <th>Solicitud nº</th>
                    <th>Afiliado nº</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Género</th>
                    <th>Cédula</th>
                    <th>País de Residencia</th>
                    <th>Nivel 1</th>
                    <th>Nivel 2</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th>Eliminado</th>
                    <th>Opciones</th>
                </tr>
                <tr>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th></th>
                </tr>
            </thead>

            
        </table>

    </div>

    <br>












<script>


    $(document).ready(function() 
    {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: 'afiliados/listar_afiliados',
                type: 'get'
            },
            responsive: 'true',
            layout: {
                topEnd: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            },
            columns: [
                {data: 'id'},
                {data: 'user', name:'users.username'},
                {data: 'solicitud_id'},
                {data: 'afiliado_id'},
                {data: 'nombre'},
                {data: 'apellidos'},
                {data: 'edad', name:'edad'},
                {data: 'genero'},
                {data: 'cedula'},
                {data: 'pais',      name: 'pais_residencia.nombre'},
                {data: 'nivel1',    name: 'geo_nivel1.nombre'},
                {data: 'nivel2',    name: 'geo_nivel2.nombre'},
                {data: 'created_at'},
                {data: 'updated_at'},
                {data: 'deleted_at'},
                {"defaultContent": "<button type='button' name='button' id='button' class='editar btn btn-primary btn-sm'><i class='bi bi-pencil'></i></button>"}
            ],
            initComplete: function( settings, json ) 
            {
                var indexColumn = 0;
                this.api().columns().every(function () 
                {
                    var column      = this;
                    var input       = document.createElement("input");
                    $(input).attr( 'placeholder', 'Search' )
                        .addClass('form-control form-control-sm')
                        .appendTo( $('.filterhead:eq('+indexColumn+')').empty() )
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                    indexColumn++;
                });
            }
            
        });
        
        obtener_data_editar("table tbody", table);

    });




    var obtener_data_editar = function(tbody, table) {
        $(tbody).on("click", "button.editar", function(){
            var data = table.row($(this).parents("tr")).data();
            window.location.href = "<?= base_url() ?>afiliados/"+data['id']+"/edit";
        });
    };
    





</script>






<?php echo $this->endSection(); ?>

<?php $this->section('scripts') ?>
   
<?php echo $this->endSection(); ?>