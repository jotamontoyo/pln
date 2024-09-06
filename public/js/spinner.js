


function activar_spinner() {
    $("#ico-enviar").prop('hidden', true);
    $('#texto-bSubmit').html("Enviando solicitud..."); 
    //Al hacer click en el botón se muestra el spinner
    $("#spinner").show("slow");
    //En cinco segundos se oculta el spinner y se muestra la tabla
    setTimeout(() => {
      $("#spinner").hide("slow");
      //$("#tabla").html('<table border="1"><tr><td>1</td><td>2</td></tr></table>');
    }, "5000");
};