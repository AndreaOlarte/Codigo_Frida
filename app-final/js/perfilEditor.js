$(document).ready(function(){
    $("#btnUpload").click(function(){
        $("#imgUpload").click();        
    });

    $("#imgUpload").on('change', function(){
        var path = $("#imgUpload").val();
        var filename = path.split('\\').pop().split('/').pop()
        $("#archivoSeleccionado").text(filename);
        $("#btnUpload").text("Selecciona otra imagen");
    });
    
    $("#aceptarCambios").click(function(){
        $("#modalGuardar").modal('toggle');
        $("#modal2").modal('toggle');
    });

    $("#btnOkCambiosRealizadosFrida, #aceptarCancelacionFrida").click(function(){
        window.location.replace('perfilFrida_view.php');
    });

    // $("#btnOkCambiosRealizadosMentor, #aceptarCancelacionMentor").click(function(){
    //     window.location.replace('perfil-mentor.html');
    // });
});