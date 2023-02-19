<?php
include 'phpCodigoCarrito.php';
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>

<div style="background-color:#f1f1f1; border-radius:5px; padding:16px; margin: auto; width: 30%; border: 3px solid green; padding: 50px; margin-top: 50px;" align="center">
<legend>Datos</legend>

<form name="frmContact" method="post" action="insertBD.php">
<p>
<label for="nombre">Nombre </label>
<input type="nombre" name="nombre" id="nombre">
</p>
<p>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" id="apellido">
</p>
<p>
<label for="direccion">Direccion</label>
<input type="text" name="direccion" id="direccion">
</p>
<p>
<label for="mail">Email</label>
<input type="text" name="mail" id="mail">
</p>
<p>
<label for="telefono">Telefono</label>
<input type="text" name="telefono" id="telefono">
</p>
<p>
<label for="num_tarjeta">Numero de la tarjeta</label>
<input type="text" name="num_tarjeta" id="num_tarjeta">
</p>
<p>
<label for="total">Importe</label>
<input type="text" name="total" value="<?php echo $_GET['importe']; ?>" readonly id="total">
</p>

<p> <button type="submit" class="btn btn-primary" id="Submit">Finalizar compra</button> </p>

<p> <a href="carritoFinal.php"> <button type="button">Ver Carrito </button> </a> </p>

<p> <a href="borrarTod.php"> <button type="button"> Cancelar compra </button> </a> </p>


</div>

