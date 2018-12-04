<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-perfil.css">

        <title>Código Frida</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2 fixed-top">
                <a class="navbar-brand" href="cursosFridas_view.php"><img src="img/logoLetrasBlanco.png" alt="" height="40px" /></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="mb-0 mr-3 ml-auto dropSesion">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="sesion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Carmen Miranda
                            </a>
                            <div class="dropdown-menu" aria-labelledby="sesion">
                                <a class="dropdown-item active" href="perfilFrida_view.php">Perfil</a>
                                <a class="dropdown-item" href="cursosFrida_view.php">Módulos</a>
                                <a class="dropdown-item" href="avanceEquipoFrida_view.php">Avance Equipo</a>
                                <a class="dropdown-item" href="index.php">Cerrar sesión</a
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="main">
            <div class="row w-100 mx-0">
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="user p-4">
                        <img src="img/user.png" alt="" width="150px">
                    </div>
                </div>
                <div class="col-9 p-5">
                    <div class="data-group d-flex">
                        <div class="data">
                            <h5 class="titulo">Nombre(s):</h5>
                            <p class="font-weight-bold">Carmen</p>
                        </div>
                        <div class="data">
                            <h5 class="titulo">Equipo:</h5>
                            <p class="font-weight-bold d-flex">Equipo BRED's CAR   <i class="text-secondary ml-2">  Código: 53445ldxwzh7ahfuimspw</i></p>
                        </div>
                    </div>
                    <div class="data-group d-flex">
                        <div class="data">
                            <h5 class="titulo">Apellido(s):</h5>
                            <p class="font-weight-bold">Miranda</p>
                        </div>
                        <div class="data">
                            <h5 class="titulo">Mentor: </h5>
                            <p class="font-weight-bold d-flex">Nombre Mentor</p>
                        </div>
                    </div>
                    <div class="data-group d-flex">
                        <div class="data">
                            <h5 class="titulo">Fecha de Nacimiento: </h5>
                            <p class="font-weight-bold">Fecha</p>
                        </div>
                        <div class="data">
                            <h5 class="titulo d-inline"> <i class="fas fa-arrow-alt-circle-up"></i> Puntos XP: </h5> <b>15</b>
                            <br>
                            <h5 class="titulo d-inline"> <i class="fas fa-award"></i> Nivel: </h5> <b>1</b>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mx-5">
                <div class="col-12 p-5 d-flex justify-content-end">
                    <a href="perfilFridaEdicion_view.php"class="btn btn-outline-info btn-lg px-4 mr-5 text-info" id="editarPerfil"> <i class="fas fa-pencil-alt mr-2"></i> Editar perfil</a>
                </div>
            </div>
        </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>