<?php
	// Se incluye la conexión a MySQL
    
	include_once('bdConnection.php');

	// Variables para insertar datos a MySQL
    $total = $_POST['total'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $num_tarjeta = $_POST['num_tarjeta'];

    // Query que pasa los datos de php a MySQL
    
    $query = "INSERT INTO venta (total, nombre, apellido, direccion, mail, telefono, num_tarjeta) 
	VALUES('$total', '$nombre', '$apellido', '$direccion', '$mail', '$telefono', '$num_tarjeta')";
    
	if ($con->query($query)) {  
        header('Location: Inicio.html');;
    }else{
        return false;
    }
?>