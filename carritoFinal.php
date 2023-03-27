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
                     <table border="1" id="cssTable">
                          <tr>  
                               <th width="5%">Id Art.</th>
                               <th width="5%">Nombre del Articulo</th>  
                               <th width="5%">Cantidad</th>  
                               <th width="5%">Precio</th>  
                               <th width="5%">Articulo-Total</th>  
                               <th width="5%">Desea eliminarlo?</th>
                          </tr>  
                          <?php
                             
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr> 
                               <td style="text-align: center; vertical-align: middle;"> <?php echo $values["item_id"]; ?> </td>
                               <td style="text-align: center; vertical-align: middle;"> <?php echo $values["item_name"]; ?> </td>  
                               <td style="text-align: center; vertical-align: middle;"> <?php echo $values["item_quantity"]; ?> </td>  
                               <td style="text-align: center; vertical-align: middle;"> $ <?php echo $values["item_price"]; ?> </td>  
                               <td style="text-align: center; vertical-align: middle;"> $ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> </td>  
                               <td style="text-align: center; vertical-align: middle;"> <a href="carritoFinal.php?action=delete&id_articulo=<?php echo $values["item_id"]; ?>"> <span class="text-danger">Eliminar</span></a></td>

                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" style="text-align: center;">Precio Final</td>  
                               <td style="text-align: center;">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>

<style>
      div{
        text-align: center;
      }
      .button {
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

     .button1 {background-color: #4CAF50;} /* Green */
     .button2 {background-color: #DE3163;} /* Cerise */

    </style>

               <div>
<p>
     <br>
     <a href="insertToBDFromPHP.php?importe=<?php echo $total; ?>"> <button class="button button1">Finalizar compra</button>

</p>

<p>
     <br>
     <a href="index.html"> <button class="button button2"> Seguir comprando </button>
</p>

               </div>

</body>
</html>


