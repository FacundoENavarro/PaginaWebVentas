 <?php
 // Se conecta a la base de datos con nombre "webventa" 
 if( empty(session_id()) && !headers_sent()){
    session_start();
}
 $connect = mysqli_connect("localhost", "root", "root", "webventa");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id_articulo"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id_articulo"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
               $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id_articulo"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;
                // echo '<script>alert("El articulo seleccionado ya esta en el carrito")</script>';
                // echo '<script>alert("Si desea agregar una cantidad diferente remuevalo primero")</script>';  
                // echo '<script>window.location="carritoFinal.php"</script>';
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id_articulo"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id_articulo"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);    
                     echo '<script>window.location="carritoFinal.php"</script>';  
                }  
           }  
      }
      if($_GET["action"] == "deleteAll")
      {
                     unset($_SESSION["shopping_cart"]);    
                     echo '<script>window.location="carritoFinal.php"</script>';  
      }    
 }  
 ?>