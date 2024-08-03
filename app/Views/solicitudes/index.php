<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>


<div class="container-fluid">

    <br><br>

    <h4 class="centrado">Solicitudes</h4>

    <table id="table" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Género</th>
                <th>Cédula</th>
                <th>País de Residencia</th>
                <th>Ciudad/Municipio</th>
                <th>Estado/Región/Comunidad/Dpto.</th>
                <th>Creado</th>
                <th>Modificado</th>
                <th>Eliminado</th>
                <th>Opciones</th>
                <th></th>
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
                <th></th>
                <th></th>
            </tr>
        </thead>

        
    </table>

    <br>

</div>










<script>


    $(document).ready(function() 
    {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: 'solicitudes/listar_solicitudes',
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
                {data: 'nombre'},
                {data: 'apellidos'},
                {data: 'edad', name:'edad'},
                {data: 'genero'},
                {data: 'cedula'},
                {data: 'residencia', name:'estados.nombre'},
                {data: 'ciudad'},
                {data: 'pais'},
                {data: 'created_at'},
                {data: 'updated_at'},
                {data: 'deleted_at'},
                {"defaultContent": "<button type='button' name='button' id='button' class='editar btn btn-primary btn-sm'><i class='bi bi-pencil'></i></button>"},
                {"defaultContent": "<button type='button' name='button' id='button' class='afiliar btn btn-success btn-sm'><i class='bi bi-bookmark'></i></button>"}
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
            window.location.href = "<?= base_url() ?>solicitudes/"+data['id']+"/edit";
        });
        $(tbody).on("click", "button.afiliar", function(){
            var data = table.row($(this).parents("tr")).data();
            window.location.href = "<?= base_url() ?>solicitudes/"+data['id']+"/afiliar";
        });


    };
    





</script>






<?php echo $this->endSection(); ?>

<?php $this->section('scripts') ?>
   
<?php echo $this->endSection(); ?>