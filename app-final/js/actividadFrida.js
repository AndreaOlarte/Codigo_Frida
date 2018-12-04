$(document).ready(function(){
    $("#archUpload").on('change', function(){
        var files = $("#archUpload")[0].files;
        var filesNames="";
        for (var i = 0; i < files.length; i++){
            filesNames+=files[i].name +'\n';
        }
        $("#seccion-actividad").val(filesNames);
    });
});