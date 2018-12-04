$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 

    $('#celLider').keypress(function(tecla) {
        if(tecla.charCode < 48 || tecla.charCode > 57) return false;
    });

    $("#imgUpload").on('change', function(){
        var path = $("#imgUpload").val();
        var filename = path.split('\\').pop().split('/').pop()
        $("#archivoSeleccionado").text(filename);
        $("#btnUpload").text("Selecciona otra imagen");
    });

    $("#aceptarRegistro").click(function(){
        $("#modal1").modal('toggle');
        $("#modal2").modal('toggle');
    });

    $("#modal2 .modal-footer button").click(function(){
        window.location.replace('index.php');
    });
});