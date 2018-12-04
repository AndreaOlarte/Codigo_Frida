<?php 
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-login.css">

        <title>Código Frida</title>
    </head>
    <body>
        <div class="container-fluid main">
            <div class="row main">
                <div class="col-md-5 col-sm-12 izquierda">
                    <div class="container">
                        <img src="img/logo.png" class="mx-auto" alt="">
                        <form action="" id="form-log-in">
                            <input id="user" name="user" type="text" class="form-control mb-3" placeholder="Usuario">
                            <input id="pwd" name="pwd" type="password" class="form-control mb-5" placeholder="Contraseña">
                            <!--Para fines de entrar a lo que se supone entraría utilicé un link-->
                            <!-- <a href="cursos-frida.html" class="btn btn-outline-info btn-lg btn-block">Iniciar Sesión</a> -->
                            <button id="iniciarSesion"type="button" class="btn btn-outline-info btn-lg btn-block">Iniciar Sesión</button>
                            <p class="mt-4 mb-0 text-dark">¿Aún no estás registrada? <button type="button" class="" id="registrate">Regístrate</button></p>
                        </form>
                        <form action="" id="form-registro">
                            <a href="registroFrida_view.php" class="btn btn-outline-info btn-lg btn-block" id="soyFrida">Frida</a>
                            <a href="registroLider_view.php" class="btn btn-outline-info btn-lg btn-block" id="soyMentor">Mentor (a)</a>
                            <p class="mt-4 mb-0 text-dark">Ya tengo una cuenta <button type="button" class="" id="ingresar">Iniciar Sesión</button></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 d-none d-md-block derecha"></div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/logIn.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>