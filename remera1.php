<?php
include 'phpCodigoCarrito.php';


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
  <a href="carritoFinal.php"> <img src="images/carrito.png" class="carrito" alt="To-Carrito" style="width:50px;height:50px;"></a>
</p>


                      <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />  
                <?php  
                $query = "SELECT * FROM familia WHERE id_articulo = 1";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="carritoFinal.php?action=add&id_articulo=<?php echo $row["id_articulo"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <h4 class="text-info"><?php echo $row["id_articulo"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["importe"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["sexo"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["importe"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  















<input type="button" class="button" value="Input Button">



</body>
</html>


