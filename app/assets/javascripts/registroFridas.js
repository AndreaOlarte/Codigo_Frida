$(document).ready(function(){
    // $('[data-toggle="popover"]').popover(); 

    $("input[name='radioEquipo']").change(function(){
        if($(this).val() == 'option1'){
            $("#ingresarCodigo").css("display","block");
            $("#nombreEquipo").css("display","none");
        }else{
            if($(this).val() == 'option2'){
                $("#ingresarCodigo").css("display","none");
                $("#nombreEquipo").css("display","block");
            }else{
                $("#nombreEquipo").css("display","none");
                $("#ingresarCodigo").css("display","none");
            }
        }
    });

    $('#cel').keypress(function(tecla) {
        if(tecla.charCode < 48 || tecla.charCode > 57) return false;
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
        if( $('#yaTengoEquipo').is(':checked') ) {
            $("#modal2 .modal-body").html(
                "¡Felicidades! <br> Usted ha sido registrada la equipo: <br> <i>NombreDelEquipo</i>"
            ); 
        } else{
            if( $('#crearEquipo').is(':checked') ) {
                $("#modal2 .modal-body").html(
                    "Se ha creado el equipo <i>NombreDelEquipo</i> exitosamente! El código del equipo es <br> "+
                    "<i class='font-weight-bold'>XYK453RG1</i> <br> Sus compañeras de equipo y mentoras deberán "+
                    "ingresar este código al registrarse para quedar inscritas en él."
                );
            } else{
                $("#modal2 .modal-body").html(
                    "¡Felicidades! <br> Usted está registrada en el programa. <br> Más adelante se te notificará "+
                    "el equipo al que ha sido asignada."
                );
            }

        }
        $("#modal1").modal('toggle');
        $("#modal2").modal('toggle');
    });

    $("#modal2 .modal-footer button").click(function(){
        window.location.replace('index.html');
    });
});