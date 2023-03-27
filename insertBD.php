<?php
    // Se incluye la conexión a MySQL
    include_once 'bdConnection.php';
    include_once 'pantalon1.php';
    include_once 'phpCodigoCarrito.php';

    // Variables para insertar datos a MySQL
    $total = $_POST['total'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $num_tarjeta = $_POST['num_tarjeta'];

    // Query que pasa los datos de php a MySQL
    $query = "INSERT INTO clientes (nombre, apellido, direccion, mail, telefono, num_tarjeta) 
    VALUES('$nombre', '$apellido', '$direccion', '$mail', '$telefono', '$num_tarjeta')";


    if(mysqli_query($con,$query)){ 

    $lastidcli = mysqli_insert_id($con); 

    }

    $query = "INSERT INTO venta (total, id_cli)
    VALUES ('$total', '$lastidcli')";

    if(mysqli_query($con,$query)){ 

    $lastidven = mysqli_insert_id($con); 

    }

$order_array = $_SESSION['shopping_cart'];

if (is_array($order_array) || is_object($order_array))
{
foreach($order_array as $primero)  
           {  
                $idart = $primero['item_id']; 
                $nombreart = $primero['item_name'];  
                $precioart = $primero['item_price'];
                $cantidadart = $primero['item_quantity'];

                $precio_resultado = $precioart * $cantidadart;

                $values[] = "('$lastidven', '$idart', '$nombreart', '$precioart','$cantidadart', '$precio_resultado')";
           }
}
           $query = "INSERT INTO detalle_venta(id_venta, id_articulo, nombre_art, precio, cantidad, precio_resultado) VALUES ";  
           $query .= implode(', ', $values); 


    if ($con->query($query)) {  
        header('Location: index.html');
    }else{
        return false;
    }

    $Sujeto = "Compra - Maria Rosa";
    $Cuerpo = "Su compra ha sido procesada correctamente. Se ha descontado $total. Gracias por adquirir nuestros productos. Esperamos que tu experiencia con nosotros haya sido extraordinaria";
    $Sender = "From: VentasMariaRosa";

    if(mail($mail, $Sujeto, $Cuerpo, $Sender)){
        echo "Email sent succesfully";
    }else{
        echo "Sorry, failed.";
    }

?>