<!DOCTYPE html>

<html>

<body>

<style>




/* Titulo y sus caracteristicas */ 
body {
  background-image: url("images/Planta.jpg");
}
h1 {
  font-family: "Lucida Console", "Courier New", monospace;
  border: 2px solid Gainsboro;
  border-radius: 1px;
  padding-top: 25px;
  padding-right: 30px;
  padding-bottom: 25px;
  padding-left: 15px;
  font-size: 45px
}


.login{
  float: right;
}

.productosimages{
  float: left;
}



/* ---------------------- */ 


</style>

<h1 class="Header">Ventas Maria-Rosa <a href="insertoToBDFromHtml.html"> <img src="images/loginf.png" class="login" alt="To-Login" style="width:60px;height:60px;"></h1></a>


<?php $valor = 2; ?>

<p>
  <a href="pantalon1.php?valor=1"> <img src="images/pantalon.png" class="productosimages" alt="To-Pantalon" style="width:50px;height:50px;"></a>
</p>


<p>
  <a href="pantalon1.php?valor=2"> <img src="images/pantalon.png" class="productosimages" alt="To-Pantalon" style="width:50px;height:50px;"></a>
</p>
















</body>
</html>