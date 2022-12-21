<?php
	// incluimos la conexión a MySQL
    
	include_once('bdConnection.php');

	// variables para insertar datos a mysqli
    $total = $_POST['total'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $num_tarjeta = $_POST['num_tarjeta'];







    
    $query = "INSERT INTO venta (total, nombre, apellido, direccion, mail, telefono, num_tarjeta) 
	VALUES('$total', '$nombre', '$apellido', '$direccion', '$mail', '$telefono', '$num_tarjeta')";
    
	if ($con->query($query)) {  
        header('Location: Inicio.html');;
    }else{
        return false;
    }
?>