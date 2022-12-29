<?php
// Se incluye el codigo del carrito para tener sus variables y la conexion a la BD
include 'phpCodigoCarrito.php';
?>

<!DOCTYPE html>

<html>

<body>


<style>

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


           <div class="container" style="width:700px;">  


                <?php
                $valor = $_GET['valor'];
                $query = ("SELECT * FROM articulos WHERE id_articulo = '$valor'");  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="carritoFinal.php?action=add&id_articulo=<?php echo $row["id_articulo"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <h4 class="text-info"><?php echo $row["nombre_producto"]; ?></h4>  
                               <img src="images/Productos/<?php echo $row["nombre_producto"];?>.jpg" alt="Sandwich" style="width:50%">
                               <h4 class="text-danger">$ <?php echo $row["importe"]; ?></h4>
                               <h4 class="text-danger">Cuantos desea añadir?</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["nombre_producto"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["importe"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Añadir al carro" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  















</body>
</html>


