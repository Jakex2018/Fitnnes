<?php

  require('../conexion.php');

  $id_ruti=$_POST['id_ruti'];

  $queryE="SELECT id_ejer, no_ejer FROM ta_ejer WHERE fk_idd0='$id_ruti' ORDER BY no_ejer ASC";
  $resultadoE=$conexion->query($queryE);

  $html="<option value='0'>Selecionar rutina</option>";
  WHILE($rowE=$resultadoE->fetch_assoc())
  {
    $html="<option value='".$rowE['id_ejer']."'>".$rowE['no_ejer']."</option>";
    echo $html;


  }

  
?>