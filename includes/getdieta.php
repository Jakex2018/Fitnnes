<?php

  require('../conexion.php');

  $id_diet=$_POST['id_diet'];

  $queryD="SELECT id_list, desc_li FROM list_di WHERE fk_id15='$id_diet' ORDER BY desc_li ASC";
  $resultadoD=$conexion->query($queryD);

  $html="<option value='0'>Selecionar Dieta</option>";
  WHILE($rowD=$resultadoD->fetch_assoc())
  {
    $html="<option value='".$rowD['id_list']."'>".$rowD['desc_li']."</option>";
    echo $html;


  }

  
?>