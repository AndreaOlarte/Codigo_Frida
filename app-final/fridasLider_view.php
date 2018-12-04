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
                                <a class="dropdown-item active" href="fridasLider_view.php">Fridas sin asignar</a>
                                <a class="dropdown-item " href="equiposLider_view.php">Equipos</a>
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
            <div class="title text-center">Fridas sin asignar</div>
            <hr>
            <table class="mx-auto table-bordered table-striped">
                <tr class="table-info">
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th> 
                    <th>Correo electrónico</th>
                    <th>Escuela de procedencia</th>
                    <th></th>
                </tr>
                <tr>
                    <td>María Cristina Ramírez Deníz</td>
                    <td>31-05-2001</td> 
                    <td>frida1@gmail.com</td>
                    <td>Escuela 1</td>
                    <td class="d-flex justify-content-center"><button class="btn btn-outline-info" data-toggle="modal" data-target="#modal1">Asignar</button></td>
                </tr>
                <tr>
                    <td>María Cristina Ramírez Deníz</td>
                    <td>15-03-2003</td> 
                    <td>frida2@gmail.com</td>
                    <td>Escuela 2</td>
                    <td class="d-flex justify-content-center"><button class="btn btn-outline-info" data-toggle="modal" data-target="#modal1">Asignar</button></td>
                </tr>
            </table>
        </section>

        <div class="modal fade text-dark" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Asignar a equipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        Equipo <br />
                        <select class="form-control" name="" id="">
                            <option value="">---Seleccione equipo---</option>
                            <option value="">Equipo Friditas</option>
                            <option value="">Equipo Fridotas</option>
                            <option value="">Equipo CAR</option>
                            <option value="">Equipo Lelele</option>
                            <option value="">Equipo Lilili</option>
                            <option value="">Equipo Lololo</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-info" id="asignarAEquipo">Asignar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>