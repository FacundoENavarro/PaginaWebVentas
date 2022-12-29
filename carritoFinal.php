<?php
// Se incluye el codigo del carrito para tener sus variables y la conexion a la BD
include 'phpCodigoCarrito.php';
?>

<!DOCTYPE html>

<html>

<body>
          <!-- Se muestran los datos de los productos seleccionados -->         
                <h3 >Detalles del Pedido</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Nombre del Articulo</th>  
                               <th width="5%">Cantidad</th>  
                               <th width="5%">Precio</th>  
                               <th width="5%">Total</th>  
                               <th width="5%">Desea removerlo?</th>  
                          </tr>  
                          <?php
                             
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="carritoFinal.php?action=delete&id_articulo=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>



<p>
     <br>
     <br>
     <a href="insertToBDFromPHP.php?importe=<?php echo $total; ?>"> <button type="button">Finalizar compra</button>

</p>



<p>
     <br>
     <br>
     <a href="Inicio.html"> <button type="button"> Seguir comprando </button>
</p>


</body>
</html>


