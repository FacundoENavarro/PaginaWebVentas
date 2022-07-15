<?php
	// incluimos la conexión a MySQL

	include_once('dbcon.php');

	// variables para insertar datos a mysqli
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contraseña = $_POST["contraseña"];
    $mail = $_POST['mail'];







    
    $query = "INSERT INTO usuario (nombre, apellido, contraseña, mail) 
	VALUES('$nombre', '$apellido', '$contraseña', '$mail')";
    
	if ($con->query($query)) {  
        header('Location: index.php');;
    }else{
        return false;
    }
?>