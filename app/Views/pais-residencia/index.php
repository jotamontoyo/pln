<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






    <br>
    <br>

    <h4 class="centrado">Divisiones administrativas de nivel 0</h4>

    

    <br><br>

    <div class="table-container">

        <a href="<?= base_url('pais-residencia/new'); ?>" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> Crear</a>

        <table id="table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Clase Nivel 1</th>
                    <th>Clase Nivel 2</th>
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
                url: 'pais-residencia/listar-paises',
                type: 'get'
            },
            responsive: 'true',
            layout: {
                topEnd: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            },
            columns :[
                {data: 'id'},
                {data: 'codigo'},
                {data: 'nombre'},
                {data: 'label_nivel1'},
                {data: 'label_nivel2'},
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
            window.location.href = "<?= base_url() ?>pais-residencia/"+data['id']+"/edit";

            //$("#editarUser").modal("show");
            
        });


    };

</script>
    

<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>
