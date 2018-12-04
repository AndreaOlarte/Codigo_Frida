<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-perfilEditor.css">

        <title>Código Frida</title>
    </head>
    <body>
        <section class="main">
            <div class="row w-100 mx-0">
                <div class="col-3 d-flex justify-content-center align-items-center flex-wrap py-5">
                    <div class="user p-4">
                        <img src="img/user.png" alt="" width="150px">
                    </div>
                    <div class="foto">
                        <button type="button" class="btn btn-outline-info btn-lg btn-block" id="btnUpload">Selecciona una imagen</button>
                        <input type="file" class="form-control-file text-dark d-none" id="imgUpload" accept=".jpg, .jpeg, .png" form="formEdicionFrida">
                        <p id="archivoSeleccionado" class="text-dark mt-2">Perfil.png</p>
                    </div>

                </div>
                <div class="col-9 p-5 d-flex flex-wrap">
                    <form action="" class="d-flex flex-wrap" id="formEdicionFrida">
                        <div class="form-group">
                            <label>*Nombre(s)</label>
                            <input type="text" class="form-control" placeholder="Inserte nombre(s)" value="Carmen">
                        </div>
                        <div class="form-group">
                            <h5 class="titulo">Equipo:</h5>
                            <p class="font-weight-bold d-flex">Equipo Friditas   <i class="text-secondary">  Código</i></p>
                        </div>
                        <div class="form-group">
                            <label>*Apellido(s)</label>
                            <input type="text" class="form-control" placeholder="Inserte apellido(s)" value="Miranda">
                        </div>
                        <div class="form-group">
                            <h5 class="titulo">Mentor: </h5>
                            <p class="font-weight-bold d-flex">Nombre Mentor</p>
                        </div>  
                        <div class="form-group">
                            <label>*Fecha de Nacimiento</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group mb-5">
                            <h5 class="titulo d-inline"> <i class="fas fa-arrow-alt-circle-up"></i> Puntos XP: </h5> <b>15</b>
                            <br>
                            <h5 class="titulo d-inline"> <i class="fas fa-award"></i> Nivel: </h5> <b>1</b>
                        </div>
                        <button type="button" class="btn btn-outline-info btn-lg ml-auto py-3 px-5" data-toggle="modal" data-target="#modalGuardar">Guardar Cambios</button>
                        <button type="button" class="btn btn-outline-danger btn-lg mr-auto ml-5 py-3 px-5" data-toggle="modal" data-target="#modalCancelar">Cancelar</button>
                    </form>
                </div>
            </div>
        </section>

        <div class="modal fade text-dark" id="modalGuardar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mx-auto" id="exampleModalLabel">Confirmación</h5>
                        <button type="button" class="close ml-1" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        ¿Está segura de que desea guardar los cambios? <br>
                        Los datos anteriores no podrán recuperse.
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-info" id="aceptarCambios">Aceptar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade text-dark" id="modalCancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mx-auto" id="exampleModalLabel">Confirmación</h5>
                        <button type="button" class="close ml-1" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        ¿Está segura de que desea cancelar los cambios? <br>
                        Los datos nuevos no podrán recuperse.
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-info" id="aceptarCancelacionFrida">Aceptar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade text-dark" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mx-auto" id="exampleModalLabel">Confirmación</h5>
                    </div>
                    <div class="modal-body text-center my-5">
                        Los cambios se han realizado con exito.
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-info w-25 mx-auto" id="btnOkCambiosRealizadosFrida">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/perfilEditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>