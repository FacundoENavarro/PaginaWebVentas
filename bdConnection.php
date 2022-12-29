<?php

	// Se crean las variables que se usaran para el login en la conexion
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "webventa";
	// Creamos la conexion con MySQL utilizando las variables anteriormente asignadas
	$con = new mysqli($servername, $username, $password, $database);
	// Se revisa la conexión
	if ($con->connect_error) {
	  	die("Conexión fallida: " . $con->connect_error);
	}
	
?>