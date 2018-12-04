<?php

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = str_replace("'", "\'", $data);
		return $data;
	}

	function ConectarBD(){
		$servername = "localhost";
		$username = "root";
		$password = "12345654321";

		$conn = new mysqli($servername, $username, $password, "codigofrida");

		if ($conn->connect_error) {
			die("Error al conectarse a la base de datos, " . $conn->connect_error);
		} 
		return $conn;
	}

?>