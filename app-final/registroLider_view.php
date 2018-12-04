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
    </head>
    <body>
        <div class="container-fluid main">
            <div class="row main">
                <div class="col-md-3 d-none d-md-block izquierda">
                    <img src="img/tcm.jpg" alt="">
                </div>
                <div class="col-md-9 col-sm-12 derecha">
                    <div class="container">
                        <form method="POST" action="" id="form-registro" class="d-flex flex-wrap" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>*Nombre(s)</label>
                                <input id="nameLider" name="nameLider"type="text" class="form-control" placeholder="Inserte nombre(s)">
                            </div>
                            <div class="form-group">
                                <label>*Apellido(s)</label>
                                <input id="lastNameLider" name="lastNameLider" type="text" class="form-control" placeholder="Inserte apellido(s)">
                            </div>
                            <div class="form-group">
                                <label>*Correo Electrónico</label>
                                <input id="emailLider" name="emailLider" type="email" class="form-control" placeholder="Inserte correo">
                            </div>
                            <div class="form-group">
                                <label>*Fecha de Nacimiento</label>
                                <input id="dateLider" name="dateLider" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>*Contraseña</label>
                                <input id="pwd" name="pwd" type="password" class="form-control" placeholder="Inserte contraseña">
                            </div>
                            <div class="form-group">
                                <label>*Confirmación de Contraseña</label>
                                <input id="pwd2" name="pwd2" type="password" class="form-control" placeholder="Inserte nuevamente la contraseña">
                            </div>
                            <div class="form-group">
                                <label>*Empresa</label>
                                <input id="companyLider" name="companyLider" type="text" class="form-control" placeholder="Inserte su empresa de procedencia">
                            </div>
                            <div class="form-group">
                                <label>*Celular</label>
                                <input id="celLider" name="celLider" type="tel" class="form-control" placeholder="Inserte su número de celular" maxlength="13" data-toggle="popover" data-trigger="focus" title="Formato de celular" data-content="LLLXXXXXXXXXX (L-Lada y X- Número)">
                            </div>
                            <div class="form-group">
                                <label>*Área de conocimiento</label>
                                <select id="expertiseLider" name="expertiseLider" class="form-control" name="areaConocimiento" id="" >
                                    <option>Físico Matemático y Ciencias de la Tierra</option>
                                    <option>Biología y Química</option>
                                    <option>Medicina y Ciencias de la salud</option>
                                    <option>Humanidades y Ciencias de la Conducta</option>
                                    <option>Sociales y Económico Administrativas</option>
                                    <option>Biotecnología y Ciencias Agropecuarias</option>
                                    <option>Ingenierías</option>
                                </select>
                            </div>
                            <div class="form-group foto">
                                <label>*Foto</label>
                                <label for="imgUpload" class="btn btn-outline-info btn-lg btn-block">Selecciona una imagen</label>
                                <input type="file" class="form-control-file text-dark d-none" id="imgUpload" accept=".jpg, .jpeg, .png">
                                <p id="archivoSeleccionado" class="text-dark mt-2">Ninguna imagen seleccionada</p>
                            </div>
                            <div class="form-group ml-auto pb-0">
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
                                        ¿Está seguro(a) de que desea registrarse? <br>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-info" id="aceptarRegistro">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade text-dark" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mx-auto">Notificación</h5>
                                    </div>
                                    <div class="modal-body text-center">
                                        ¡Felicidades! <br> Usted ha sido registrado(a).
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

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/registroMentor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>