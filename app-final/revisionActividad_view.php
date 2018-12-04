<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-revisionActividad.css">

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
                                Carmen Miranda
                            </a>
                            <div class="dropdown-menu" aria-labelledby="sesion">
                                <a class="dropdown-item" href="fridasLider_view.php">Fridas sin asignar</a>
                                <a class="dropdown-item" href="equiposLider_view.php">Equipos</a>
                                <a class="dropdown-item" href="actividadesLider_view.php">Actividades</a>
                                <a class="dropdown-item" href="avanceEquipoLider_view.php">Avance Equipos</a>
                                <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="main">
            <div class="header-curso mb-5">
                <div class="container nombre-curso mt-2 mb-auto">
                    <h1>Actividad 1- Equipo Fridotas</h1>
                    <p class="lead">Descripción actividad 1</p>
                    <h3>Archivo subidos por el equipo:</h3>
                    <a href="C:\CodigoFrida\archivos\fridas\cartaAsesorPoster.docx" class="mt-4" download="">cartaAsesorPoster.docx</a>
                </div>
            </div>
            <div class="main-curso mt-3">
                <div class="d-flex justify-content-end w-75 mx-auto mb-1">
                    <label id="btnUpload" for="archUpload" class="btn btn-lg">Elegir un archivo</label>
                </div>
                <input type="file" class="form-control-file text-dark d-none" id="archUpload">
                <div class="container seccion-actividad text-center mb-5" download>
                  <textarea class="text-center" name="seccion-actividad" id="seccion-actividad" cols="30" rows="10" readonly> No se ha seleccionado ningún archivo </textarea>
                </div>
                <div class="container d-flex">
                    <div class="comentarios mb-3">
                        <p>Comentarios:</p>
                        <textarea name="comentarios" id="actComentarios" cols="50" rows="4" placeholder="Inserte comentarios"></textarea>
                    </div>
                    <div class="calificacion d-flex align-items-center">
                        <p class="w-25 mr-2">Calificación en base a 5:</p>
                        <input id="calificacion" type="number" class="w-50 text-center" min=0 max=5 placeholder="0-5" maxlength="1">
                    </div>
                </div>
                <div class="container botones text-center mb-5">
                    <button class="btn btn-outline-danger btn-lg mr-5" data-toggle="modal" data-target="#modalCancelar">Cancelar</button>
                    <button class="btn btn-outline-info btn-lg" data-toggle="modal" data-target="#modalCalificar">Guardar Cambios</button>
                </div>
            </div>

            <div class="modal fade text-dark" id="modalCalificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center my-5">
                            ¿Está segura de que desea calificar la actividad?<br>
                            Los datos no podrán ser modificados después.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-info btn-lg mr-2" id="calificar">Si, estoy segura</button>
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">No, cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade text-dark" id="modalCancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center my-5">
                            ¿Está segura de que desea cancelar la revisión?
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-info btn-lg m-2" id="cancelar">Si, estoy segura</button>
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">No, Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/revisionActividad.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>