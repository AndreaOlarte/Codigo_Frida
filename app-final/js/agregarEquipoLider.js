$(document).ready(function(){
    $("#btnOtraFrida").click(function(){
        var formFridas = document.getElementById("fridasInvitacion");
        var childs=formFridas.childElementCount;

        if(childs<6){
            var select = document.createElement("select");
                select.className="form-control mb-2";
                select.innerHTML = "<option>---Seleccione a una frida---</option>";
                select.innerHTML += "<option>María Isabel Macías Martínez</option>";
                select.innerHTML += "<option>Rosa Elena Miranda González</option>";
                select.innerHTML += "<option>María Cristina Ramírez Deníz</option>";
                select.innerHTML += "<option>Natalia Aniko De Mercado Sánchez</option>";
                select.innerHTML += "<option>Yesenia Jiménez Santizo</option>";
            formFridas.appendChild(select);
            if(childs==5){
                $("#btnOtraFrida").css("display","none");
            }
        }
    });

    $("#btnUpload").click(function(){
        $("#imgUpload").click();        
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
        window.location.replace('equiposLider_view.php');
    });
});