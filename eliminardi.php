<?php
  include 'conexion.php';
  if (!empty($_POST)) {
   
  $fk_idd7=$_POST['fk_idd7'];
  $query_delete=mysqli_query($conexion,"DELETE FROM re_dili WHERE fk_idd7=$fk_idd7");
  header("location: listadodi.php");
  } 
?>
