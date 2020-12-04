<?php 
   include"conexion.php";
   if(!empty($_POST)){
      $id_cuen=$_POST["id_cuen"];
      $queryd=mysqli_query($conexion,"DELETE FROM ta_cuen WHERE id_cuen=$id_cuen");
      
      header("location:usuarios.php");
      
   }

?>