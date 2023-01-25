<?php
	// Se incluye la conexión a MySQL
    
	include_once('bdConnection.php');

    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = "root"; /* Password */
    $dbname = "webventa"; /* Database name */

    $con = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }


	// Variables para insertar datos a MySQL
    $total = $_POST['total'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $num_tarjeta = $_POST['num_tarjeta'];

    // Query que pasa los datos de php a MySQL
    
    // $query = "INSERT INTO clientes (total, nombre, apellido, direccion, mail, telefono, num_tarjeta) 
	// VALUES('$total', '$nombre', '$apellido', '$direccion', '$mail', '$telefono', '$num_tarjeta')";

    $query = "INSERT INTO clientes (nombre, apellido, direccion, mail, telefono, num_tarjeta) 
    VALUES('$nombre', '$apellido', '$direccion', '$mail', '$telefono', '$num_tarjeta')";

    //$ultimaId = mysql_result(mysql_query("SELECT id_cli FROM clientes ORDER BY id_cli DESC LIMIT 1;"),0);

    if(mysqli_query($con,$query)){ 

    // Get last insert id 
    $lastid = mysqli_insert_id($con); 

    echo "last id : ".$lastid; 
    }

    $query = "INSERT INTO venta (total, id_cli)
    VALUES ('$total', '$lastid')";

	if ($con->query($query)) {  
        header('Location: Inicio.html');;
    }else{
        return false;
    }
?>