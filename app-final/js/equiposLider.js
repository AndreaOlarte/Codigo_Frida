$(document).ready(function(){
    var equipoModalAbierto;

    $("div[class='team']").click(function(){
        /*equipoModalAbierto = document.getElementById($(this).attr("id"));
        $("#modal1").modal('toggle');*/
        console.log("Holi");
        window.location.replace('equipo_view.php');
    });

    /*$("#aceptarEdicion").click(function(){
        var nuevoNombreElemento = document.getElementById("nuevoNombre");
        var nuevoNombre=document.getElementById("nuevoNombre").value;
        if(nuevoNombre!=""){
            equipoModalAbierto.children[0].innerHTML= "Equipo "+ nuevoNombre;
            var newId= 'team'+nuevoNombreElemento.value;
            equipoModalAbierto.id=newId;
            $("#modal1").modal('toggle');
            nuevoNombreElemento.value="";
        }else{
            alert("Debe de ingresarse un nombre");
            nuevoNombreElemento.focus();
        }
    });

    $("#modal2 .modal-footer button").click(function(){
        window.location.replace('index.html');
    });*/
});