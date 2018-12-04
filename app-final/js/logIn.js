$(document).ready(function(){
    $("#registrate").click(function(){
        $("#form-log-in").css("display","none");
        $("#form-registro").css("display","block");
    });

    $("#ingresar").click(function(){
        $("#form-registro").css("display","none");
        $("#form-log-in").css("display","block");
    });

    $("#iniciarSesion").on("click",function(){
        var user = $("#user").val();
        var pwd = $("#pwd").val();

        if(user=="cmiranda@ucol.mx")
            window.location.replace('cursosFridas_view.php');
        else
            window.location.replace('fridasLider_view.php');
    });
});