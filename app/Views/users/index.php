<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>


<div class="container">

    <table id="table" class="display">
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>status</th>
                <th>status_message</th>
                <th>active</th>
                <th>locale</th>
                <th>last_active</th>
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
                <th class="filterhead"></th>
                <th class="filterhead"></th>
                <th class="filterhead"></th>
                <th class="filterhead"></th>
            </tr>
        </thead>

        
    </table>

</div>




<script>





    $(document).ready(function() 
    {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: 'users/listar_usuarios',
                type: 'get'
            },
            columns :[
                {data: 'id'},
                {data: 'username'},
                {data: 'status'},
                {data: 'status_message'},
                {data: 'active'},
                {data: 'locale'},
                {data: 'last_active'},
                {data: 'created_at'},
                {data: 'updated_at'},
                {data: 'deleted_at'},
                {"defaultContent": "<button type='button' name='button' id='button' class='editar btn btn-primary'><i class='bi bi-pencil'></i></button>"},
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
            window.location.href = "<?= base_url() ?>/users/"+data['id']+"/edit";

            //$("#editarUser").modal("show");
            
        });


    };
    





</script>






<?php echo $this->endSection(); ?>

<?php $this->section('scripts') ?>
   
<?php echo $this->endSection(); ?>