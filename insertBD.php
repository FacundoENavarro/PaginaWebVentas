<?php
	// incluimos la conexión a MySQL

	include_once('bdConnection.php');

	// variables para insertar datos a mysqli
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contraseña = $_POST["contraseña"];
    $mail = $_POST['mail'];







    
    $query = "INSERT INTO usuario (nombre, apellido, contraseña, mail) 
	VALUES('$nombre', '$apellido', '$contraseña', '$mail')";
    
	if ($con->query($query)) {  
        header('Location: inicio.php');;
    }else{
        return false;
    }
?>