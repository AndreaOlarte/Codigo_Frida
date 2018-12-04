$(document).ready(function(){
    $("#archUpload").on('change', function(){
        var files = $("#archUpload")[0].files;
        var filesNames="";
        for (var i = 0; i < files.length; i++){
            filesNames+=files[i].name +'\n';
        }
        $("#seccion-actividad").val(filesNames);
    });

    $('#calificacion').keypress(function(tecla) {
        if(tecla.charCode < 48 || tecla.charCode > 53) return false;
    });

    $('#calificar').on('click',function(){
        window.location.replace('actividadesLider_view.php');
    });
});