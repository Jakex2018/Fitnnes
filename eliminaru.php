<?php
  include 'conexion.php';
  if (!empty($_POST)) {
   
  $fk_id01=$_POST['fk_id01'];
  $query_delete=mysqli_query($conexion,"DELETE FROM re_curu  WHERE fk_id01=$fk_id01");
  header("location: listado.php");
  } 
?>

