$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 

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

    $('#celFrida').keypress(function(tecla) {
        if(tecla.charCode < 48 || tecla.charCode > 57) return false;
    });

    $("#imgUpload").on('change', function(){
        var path = $("#imgUpload").val();
        var filename = path.split('\\').pop().split('/').pop()
        $("#archivoSeleccionado").text(filename);
        $("#btnUpload").text("Selecciona otra imagen");
    });

    $("#aceptarRegistro").click(function(){
        var email = $('#emailFrida').val(),
            pwd1 = $('#pdwFrida').val(),
            pwd2 = $('#pdwFrida2').val(),
            name = $('#nameFrida').val(),
            last_name = $('#lastNameFrida').val(),
            birthdate = $('#dateFrida').val(),
            school = $('#schoolFrida').val(),
            phone = $('#celFrida').val(),
            avatar = $('#imgUpload').val(),
            team_id = 0;

        //var code = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);

        if(email != ""&&pwd1 != "" && pwd2 != "" && name != "" && last_name != "" && birthdate != "" && school != ""&& phone != "" && avatar!= ""){
            if($('#pdwFrida').val() == $('#pdwFrida2').val()){
                if( $('#yaTengoEquipo').is(':checked') ) {
                    team_id = $('#codeTeam').val();
                    var parameters = {
                        "email_Frida":email,
                        "password":pwd1,
                        "name_Frida":name,
                        "lastName_Frida": last_name,
                        "birthdate_Frida": birthdate,
                        "school_Frida": school,
                        "phone_Frida": phone,
                        "avatar_Frida": avatar,
                        "id_team": team_id
                    };
                    $.ajax({
                        type:  'POST',
                        url:   'http://localhost/CodigoFrida/registroFrida.php',
                        // contentType: "application/json; charset=utf-8",
                        //dataType:'json',
                        data: parameters,
                        //data: $("#form-registro").serialize(),
                        success: function(response){
                            console.log(response);
                            $("#modal2 .modal-body").html(
                                "¡Felicidades! Usted ha sido registrada al equipo con el código: <i>"+team_id+"</i>"
                            );
                            $("#modal1").modal('toggle');
                            $("#modal2").modal('toggle');
                        },
                        error: function(error){
                            console.log(error);
                        },
                        beforeSend: function () {
                            console.log("Cargando....");
                            //$("#resultado").html("Procesando, espere por favor...");
                        }
                    });
                } else{
                    if( $('#crearEquipo').is(':checked') ) {
                        team_name = $('#nameTeam').val();
                        team_id = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);

                        var parameters = {
                            "email_Frida":email,
                            "password":pwd1,
                            "name_Frida":name,
                            "lastName_Frida": last_name,
                            "birthdate_Frida": birthdate,
                            "school_Frida": school,
                            "phone_Frida": phone,
                            "avatar_Frida": avatar,
                            "id_team": team_id
                        };
                        $.ajax({
                            type:  'POST',
                            url:   'http://localhost/CodigoFrida/registroFrida.php',
                            // contentType: "application/json; charset=utf-8",
                            //dataType:'json',
                            data:  parameters,
                            //data: $("#form-registro").serialize(),
                            beforeSend: function () {
                                console.log("Cargando....");
                                //$("#resultado").html("Procesando, espere por favor...");
                            },
                            success:  function (response) { 
                                console.log(response);
                                $("#modal2 .modal-body").html(
                                    "Se ha creado el equipo <i>"+$("#nameTeam").val()+"</i> exitosamente! El código del equipo es <br> "+
                                    "<i class='font-weight-bold'>"+team_id+"</i> <br> Sus compañeras de equipo y mentoras deberán "+
                                    "ingresar este código al registrarse para quedar inscritas en él."
                                );
                                $("#modal1").modal('toggle');
                                $("#modal2").modal('toggle');
                            }
                        });
                    } else{
                        var parameters = {
                            "email_Frida":email,
                            "password":pwd1,
                            "name_Frida":name,
                            "lastName_Frida": last_name,
                            "birthdate_Frida": birthdate,
                            "school_Frida": school,
                            "phone_Frida": phone,
                            "avatar_Frida": avatar,
                            "id_team": team_id
                        };
                        $.ajax({
                            type:  'POST',
                            url:   'http://localhost/CodigoFrida/registroFrida.php',
                            // contentType: "application/json; charset=utf-8",
                            //dataType:'json',
                            data:  parameters,
                            //data: $("#form-registro").serialize(),
                            beforeSend: function () {
                                console.log("Cargando....");
                                //$("#resultado").html("Procesando, espere por favor...");
                            },
                            success:  function (response) { 
                                console.log(response);
                                $("#modal2 .modal-body").html(
                                    "¡Felicidades! <br> Usted está registrada en el programa. <br> Más adelante se te notificará "+
                                    "el equipo al que ha sido asignada."
                                );
                                $("#modal1").modal('toggle');
                                $("#modal2").modal('toggle');
                            }
                        });
                    }
        
                }                
            }else{
                $("#modal1").modal('toggle');
                alert("Las contraseñas no son iguales");
            }
        }
        else{
            $("#modal1").modal('toggle');
            alert("Rellene todos los campos");
        }
    });

    

    $("#modal2 .modal-footer button").click(function(){
        window.location.replace('index.php');
        $("#modal2").modal('toggle');
    });
});