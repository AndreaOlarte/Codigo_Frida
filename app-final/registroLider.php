<?php 
	require 'funciones.php';

    $conn=ConectarBD();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
        $carpeta_destino = 'archivos/fridas/';
        $archivo_subido = $carpeta_destino . $_FILES['archUpload']['name'];
        $name_file = $_FILES['archUpload']['name'];
        
        $email = $_POST["email_Frida"];
        $password = $_POST["password"];
        $name = $_POST["name_Frida"];
        $last_name = $_POST["lastName_Frida"];
        $birthdate = $_POST["birthdate_Frida"];
        $school = $_POST["school_Frida"];
        $phone = $_POST["phone_Frida"];
        $avatar = $name_file;

        move_uploaded_file($_FILES['archUpload']['tmp_name'], $archivo_subido);
        $query = 'INSERT INTO delivers (id_module, file_upload, id_team) VALUES ("'. $id_module. '", "'. $name_file. '", "'.$id_team.'")';
        $conn->query($query);

        if($conn->error)
            die("Error el el query, " . $conn->error);
        else
            header("Location: actividadFridas_view.php");
    }

?>

