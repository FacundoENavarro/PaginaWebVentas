<?php
$valor = 3000;





?>
<!DOCTYPE html>

<html>

<body>


<style>

.productosimages{
  float: left;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.carrito{
  float: right;
}


</style>


<p>
  <img src="images/pantalon.png" class="productosimages" alt="To-Pantalon" style="width:140px;height:140px;"></a>
  <a href="carrito.php"> <img src="images/carrito.png" class="carrito" alt="To-Carrito" style="width:50px;height:50px;"></a>
</p>


<p>
  Desea aniadirlo al carro?
</p>

<p> Valor:
<?php
echo $valor;
?>
</p>


<input type="button" class="button" value="Input Button">



</body>
</html>


