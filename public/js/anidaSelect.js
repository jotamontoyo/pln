


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