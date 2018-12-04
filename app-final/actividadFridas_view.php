<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles-actividadFrida.css">
        
        <title>Código Frida</title>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/actividadFrida.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2 fixed-top">
                <a class="navbar-brand" href="cursosFridas_view.php"><img src="./img/logoLetrasBlanco.png" alt="" height="40px" /></a>
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
                                <a class="dropdown-item" href="perfilFrida_view.php">Perfil</a>
                                <a class="dropdown-item" href="cursosFridas_view.php">Módulos</a>
                                <a class="dropdown-item" href="avanceEquipoFrida_view.php">Avance Equipo</a>
                                <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="main">
        <?php
            require "funciones.php";
            $conn=ConectarBD();
            $result=$conn->query("SELECT * FROM fridas_modules WHERE id=1");

            if($conn->error)
                die("Error al obtener actividad. ".$conn->error);

            while($row = $result->fetch_assoc()) {?>
                <div class="header-curso">
                    <img src="<?php echo $row["image"]?>" alt="">
                    <div class="container nombre-curso">
                        <h1><?php echo $row["name"]?></h1>
                        <p class="lead font-weight-bold"><?php echo $row["description"]?></p>
                    </div>
                </div>
                <div class="main-curso mt-3">
                    <div class="container">
                        <div class="d-flex flex-column">
                            <iframe class="align-self-center"width="90%" height="505" src="<?php echo $row["video_link"]?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="infoDescargable mt-3">
                                <h3 class="titulo">Archivos:</h3>
                                <a href="<?php echo $row["file"]?>" class="mt-4" download="">Archivo</a>
                            </div>
                        </div>
                        <div class="container nombre-curso mb-auto mt-5">
                            <h1><?php echo $row["name_activity"]?></h1>
                            <p class="lead"><?php echo $row["activity"]?></p>
                        </div>
                        <div class="">
                            <?php 
                                $result2=$conn->query("SELECT * FROM delivers WHERE id_module=1 AND id_team=1");
                                if ($result2->num_rows > 0) {
                                    while($row = $result2->fetch_assoc()) {?>
                                        <div class="container seccion-actividad text-center mb-5 d-flex justify-content-center align-items-center">
                                            <textarea class="text-center" name="seccion-actividad" id="seccion-actividad" cols="30" rows="10" readonly> <?php echo $row["file_upload"]?></textarea>  
                                        </div>
                                <?php }
                                }else{?>
                                    <form id="subirArchivos" method="post" enctype="multipart/form-data" action="subirActividadFridas.php" class="d-flex justify-content-end">
                                        <label for="archUpload" class="btn btn-outline-info btn-lg">Elegir archivo(s)</label>
                                        <input type="file" id="archUpload" name="archUpload" class="d-none" require>
                                        <input type="text" id="idModule" name="idModule" value="<?php echo $row["id"]?>" class="d-none">
                                        <input type="text" id="idTeam" name="idTeam" value="1" class="d-none">
                                    </form>
                                    <div class="container seccion-actividad text-center mb-5 d-flex justify-content-center align-items-center">
                                        <textarea class="text-center" name="seccion-actividad" id="seccion-actividad" cols="30" rows="10" readonly> No ha seleccionado ningún archivo</textarea>  
                                    </div>
                                    <div class="container botones text-center">
                                        <!-- <button class="btn btn-outline-danger btn-lg mr-5">Cancelar</button> -->
                                        <!-- <button id="btnSubir" class="btn btn-info btn-lg">Entregar actividad</button> -->
                                        <input form="subirArchivos" type="submit" class="btn btn-info btn-lg" value="Entregar actividad">
                                        <!-- <input id="btnSubir" type="button" class="btn btn-info btn-lg" value="Entregar actividad" onclick="subirActividad(<?php echo $row["id"]?>)"> -->
                                    </div>
                                <?php }?>
                        </div>
                    <div>
                <div>
        <?php }?>
        </section>
    </body>
</html>