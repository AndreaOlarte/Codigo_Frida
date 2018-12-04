<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-registro.css">

        <title>Código Frida</title>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/registroFrida.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row main">
                <div class="col-md-3 d-none d-md-block izquierda">
                    <img src="img/tcm.jpg" alt="">
                </div>
                <div class="col-md-9 col-sm-12 derecha">
                    <div class="container">
                        <form method="POST" action="registroFrida.php" id="form-registro" class="d-flex flex-wrap" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>*Nombre(s)</label>
                                <input type="text" id="nameFrida" name="nameFrida" class="form-control" placeholder="Inserte nombre(s)" required>
                            </div>
                            <div class="form-group">
                                <label>*Apellido(s)</label>
                                <input type="text" id="lastNameFrida" name="lastNameFrida" class="form-control" placeholder="Inserte apellido(s)" required>
                            </div>
                            <div class="form-group">
                                <label>*Correo Electrónico</label>
                                <input type="email" id="emailFrida" name="emailFrida" class="form-control" placeholder="Inserte correo" required>
                            </div>
                            <div class="form-group">
                                <label>*Fecha de Nacimiento</label>
                                <input type="date" id="dateFrida" name="dateFrida" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>*Contraseña</label>
                                <input type="password" id="pdwFrida" name="pdwFrida" class="form-control" placeholder="Inserte contraseña" required>
                            </div>
                            <div class="form-group">
                                <label>*Confirmación de Contraseña</label>
                                <input type="password" id="pdwFrida2" name="pdwFrida2" class="form-control" placeholder="Inserte nuevamente la contraseña" required>
                            </div>
                            <div class="form-group">
                                <label>*Escuela/Institución</label>
                                <input type="text" id="schoolFrida" name="schoolFrida" class="form-control" placeholder="Inserte su escuela de procedencia" required>
                            </div>
                            <div class="form-group">
                                <label>*Celular</label>
                                <input id="celFrida" name="celFrida" type="tel" class="form-control" placeholder="Inserte su número de celular" maxlength="13" data-toggle="popover" data-trigger="focus" title="Formato de celular" data-content="LLLXXXXXXXXXX (L-Lada y X- Número)" required>
                            </div>
                            <div class="form-group">
                                <label>*Equipo</label>
                                <br>
                                <div class="d-flex flex-wrap">
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input d-none" type="radio" name="radioEquipo" id="yaTengoEquipo" value="option1" checked>
                                        <label class="form-check-label btn btn-sm btn-outline-info" for="yaTengoEquipo" id="labelYaTengo">
                                            Ya tengo un Equipo
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input d-none" type="radio" name="radioEquipo" id="crearEquipo" value="option2">
                                        <label class="form-check-label btn btn-sm btn-outline-info" for="crearEquipo" id="labelCrear">
                                            Crear Equipo
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline m-0">
                                        <input class="form-check-input d-none" type="radio" name="radioEquipo" id="noTengoEquipo" value="option3">
                                        <label class="form-check-label btn btn-sm btn-outline-info" for="noTengoEquipo" id="labelNoTengo">
                                            No tengo equipo
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group w-100 mt-4" id="ingresarCodigo">
                                    <label>Ingresa código del equipo</label>
                                    <input id="codeTeam" name="codeTeam" type="text" class="form-control" placeholder="Inserte código">
                                </div>
                                <div class="form-group w-100 mt-4" id="nombreEquipo">
                                    <label>Ingresa el nombre del equipo</label>
                                    <input id="nameTeam" name="nameTeam" type="text" class="form-control" placeholder="Inserte nombre">
                                </div>
                            </div>
                            <div class="form-group foto">
                                <label>*Foto</label>
                                <label for="imgUpload" class="btn btn-outline-info btn-lg btn-block">Selecciona una imagen</label>
                                <input type="file" class="form-control-file text-dark d-none" id="imgUpload" name="imgUpload"accept=".jpg, .jpeg, .png">
                                <p id="archivoSeleccionado" class="text-dark mt-2">Ninguna imagen seleccionada</p>
                            </div>
                            <div class="form-group ml-auto pb-0 form-registrar">
                                <button type="button" id="registrarme" class="btn btn-info btn-lg btn-block w-100" data-toggle="modal" data-target="#modal1">Registrarme</button>
                                <p class="text-dark w-100 text-right mt-3 mb-0">Ya tengo una cuenta <a href="index.php" class="" id="ingresar">Iniciar Sesión</a></p>
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
                                        ¿Está segura de que desea registrarse con esa modalidad de equipo? <br>
                                        Más adelante ya no podrá cambiarlo.
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
                                        .....
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-info">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>