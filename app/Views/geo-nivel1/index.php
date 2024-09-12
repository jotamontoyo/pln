<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






    <br>
    <br>

    <h4 class="centrado">Divisiones administrativas de nivel 1</h4>
    <p class="centrado small">Estados, Comunidades, Departamentos...</p>

    

    <br><br>

    <div class="table-container">

        <a href="<?= base_url('geonivel1/new'); ?>" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> Crear</a>
        <a class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> Importar</a>

        <table id="table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Código</th>
                    <th>Clase Nivel 1</th>
                    <th>Nombre</th>
                    <th>País</th>
                    <th>Options</th>
                </tr>
                <tr>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class="filterhead"></th>
                    <th class=""></th>
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
                url: 'geonivel1/listar_nivel',
                type: 'get'
            },
            columns :[
                {data: 'id'},
                {data: 'codigo'},
                {data: 'nivel', name:'pais_residencia.label_nivel1'},
                {data: 'nombre'},
                {data: 'pais', name:'pais_residencia.nombre'},
                {"defaultContent": "<button type='button' name='button' id='button' class='editar btn btn-primary'><i class='bi bi-pencil'></i></button>"}
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
            
            //console.log(data['id']);
            window.location.href = "<?= base_url() ?>geonivel1/"+data['id']+"/edit";

            //$("#editarUser").modal("show");
            
        });


    };

</script>
    

<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
