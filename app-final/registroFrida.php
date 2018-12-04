<?php 
	require 'funciones.php';

    $conn=ConectarBD();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
        $carpeta_destino = 'fotos/fridas/';
        $archivo_subido = $carpeta_destino . $_FILES['imgUpload']['name'];
        $name_file = $_FILES['imgUpload']['name'];

        $email = $_POST["email_Frida"];
        $password = $_POST["password"];
        $name = $_POST["name_Frida"];
        $last_name = $_POST["lastName_Frida"];
        $birthdate = $_POST["birthdate_Frida"];
        $school = $_POST["school_Frida"];
        $phone = $_POST["phone_Frida"];
        $avatar = $name_file;
        $id_team =  $_POST["id_team"];

        move_uploaded_file($_FILES['imgUpload']['tmp_name'], $archivo_subido);
        $query = 'INSERT INTO fridas (email, password, name, last_name, birthdate, school, phone, avatar,team_id) VALUES ("'. $email. '", "'. $password. '", "'.$name. '", "'. $last_name.'", "'.$birthdate.'", "'.$school.'", "'.$phone.'", "'.$avatar.'", "'.$id_team.'")';
        $conn->query($query);

        if($conn->error)
            die("Error el el query, " . $conn->error);
        else
            header("Location: index.php");
    }

?>

