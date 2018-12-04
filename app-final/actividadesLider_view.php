<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-fridasLider.css">

        <title>Código Frida</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2 fixed-top">
                <a class="navbar-brand" href="actividadesLider_view.php"><img src="img/logoLetrasBlanco.png" alt="" height="40px" /></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="mb-0 mr-3 ml-auto dropSesion">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="sesion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Andrea Olarte
                            </a>
                            <div class="dropdown-menu" aria-labelledby="sesion">
                                <a class="dropdown-item" href="fridasLider_view.php">Fridas sin asignar</a>
                                <a class="dropdown-item" href="equiposLider_view.php">Equipos</a>
                                <a class="dropdown-item active" href="actividadesLider_view.php">Actividades</a>
                                <a class="dropdown-item" href="avanceEquipoLider_view.php">Avance Equipos</a>
                                <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="main">
            <div class="title text-center">Actividades</div>
            <hr>
            <div class="filtros d-flex ml-5 mb-5 flex-wrap">
                <div class="mentor w-25 mr-4">
                    <div class="subtitle">Mentor:</div>
                    <select class="form-control">
                        <option>Todos</option>
                        <option>Mentor 1</option>
                        <option>Mentor 2</option>
                        <option>Mentor 3</option>
                        <option>Mentor 4</option>
                        <option>Mentor 5</option>
                    </select>
                </div>
                <div class="equipo w-25 mr-4">
                    <div class="subtitle">Equipo:</div>
                    <select class="form-control">
                        <option>Todos</option>
                        <option>Equipo Friditas</option>
                        <option>Equipo Fridotas</option>
                        <option>Equipo CAR</option>
                        <option>Equipo Lelele</option>
                        <option>Equipo Lilili</option>
                        <option>Equipo Lololo</option>
                    </select>
                </div>
                <div class="tipoActividad w-25 ml-5 mr-4 mt-2">
                    <div class="subtitle">Actividad:</div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" value="actTodas" checked>Todas
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" value="actRev">Revisadas
                        </label>
                    </div>
                    <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" value="actSin">Sin revisar
                        </label>
                    </div>
                </div>
            </div>
            <div class="activities d-flex flex-wrap justify-content-around">
                <div class="activity" id="teamFriditas">
                    <div class="activityName">Actividad 1 </div>
                    <div class="teamName">Equipo Friditas</div>
                    <div class="activityStatus">Revisada</div>
                </div>
                <div class="activity" id="teamFridotas">
                    <div class="activityName">Actividad 1 </div>
                    <div class="teamName">Equipo Fridotas</div>
                    <div class="activityStatus"><a href="revisionActividad_view.php" class="btn btn-outline-info">Revisar</a></div>
                </div>
                <div class="activity" id="teamFriditas">
                    <div class="activityName">Actividad 2 </div>
                    <div class="teamName">Equipo Friditas</div>
                    <div class="activityStatus"><button class="btn btn-outline-info">Revisar</button></div>
                </div>
                <!-- <div class="activity" id="teamFridotas">
                    <div class="activityName">Actividad 2 </div>
                    <div class="teamName">Equipo Fridotas</div>
                    <div class="activityStatus"><button class="btn btn-outline-info">Revisar</button></div>
                </div> -->
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>