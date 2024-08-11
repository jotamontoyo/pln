<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>






    <br>
    <br>

    <h4 class="centrado">Municipios</h4>

    <div class="table-container">

        <a href="<?= base_url('/municipios/new'); ?>" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> Crear</a>

        <br><br>

        <table id="table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>deleted_at</th>
                    <th>Options</th>
                </tr>
                <tr>
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
                url: 'municipios/listar_municipios',
                type: 'get'
            },
            columns :[
                {data: 'id'},
                {data: 'codigo'},
                {data: 'nombre'},
                {data: 'departamento', name:'departamentos.nombre'},
                {data: 'created_at'},
                {data: 'updated_at'},
                {data: 'deleted_at'},
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
            window.location.href = "<?= base_url() ?>municipios/"+data['id']+"/edit";

            //$("#editarUser").modal("show");
            
        });


    };
    





</script>




<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>