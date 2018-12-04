<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-agregarEquipoLider.css">

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
            <form action="" id="form-agregar" class="d-flex flex-wrap">
                <div class="form-group">
                    <div class="form-group w-100 p-0" id="nombreEquipo">
                        <label>Nombre del equipo</label>
                        <input id="inputNombreEquipo" type="text" class="form-control" placeholder="Inserte nombre">
                    </div>
                    <div class="form-group w-100 d-flex p-0 mt-5">
                        <div class="flex-grow-1" id="fridasInvitacion">
                            <label>*Fridas</label>
                            <select class="form-control mb-2">
                                <option>---Seleccione a una frida---</option>
                                <option>María Isabel Macías Martínez</option>
                                <option>Rosa Elena Miranda González</option>
                                <option>María Cristina Ramírez Deníz</option>
                                <option>Natalia Aniko De Mercado Sánchez</option>
                                <option>Yesenia Jiménez Santizo</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center mt-4 pt-2 buttonFrida">
                            <button type="button" id="btnOtraFrida" class="btn btn-outline-info ml-auto mr-0 py-0"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group foto">
                    <label>*Foto</label>
                    <button type="button" class="btn btn-outline-info btn-lg btn-block" id="btnUpload">Selecciona una imagen</button>
                    <input type="file" class="form-control-file text-dark d-none" id="imgUpload" accept=".jpg, .jpeg, .png">
                    <p id="archivoSeleccionado" class="text-dark mt-2">Ninguna imagen seleccionada</p>

                    <div class="form-group w-100 p-0 mt-3">
                        <label>*Mentor</label>
                        <select class="form-control mb-2" id="seleccionMentor">
                            <option>---Seleccione a un mentor---</option>
                            <option>María Isabel Macías Martínez</option>
                            <option>Rosa Elena Miranda González</option>
                            <option>María Cristina Ramírez Deníz</option>
                            <option>Natalia Aniko De Mercado Sánchez</option>
                            <option>Yesenia Jiménez Santizo</option>
                        </select>
                    </div>
                    <div class="form-group w-100 ml-auto p-0 form-agregar mt-5">
                        <button type="button" id="agregar" class="btn btn-info btn-lg btn-block w-100" data-toggle="modal" data-target="#modal1">Agregar</button>
                    </div>
                </div>
                
            </form>
    
            <!-- Modales -->
            <div class="modal fade text-dark" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            ¿Está segura de que desea registrar el equipo? <br>
                            Más adelante ya no podrá cambiar la imagen.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-info" id="aceptarRegistro">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade text-dark" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header mx-auto">
                            <h5 class="modal-title">Notificación</h5>
                        </div>
                        <div class="modal-body text-center">
                            Se ha creado el equipo <i>NombreDelEquipo</i> exitosamente! <br> El código del equipo es
                            <i class='font-weight-bold'>XYK453RG1</i>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-info">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/agregarEquipoLider.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>