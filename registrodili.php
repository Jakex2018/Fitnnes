<?php
include 'conexion.php';

$dieta= $_POST['dieta'];
$comida=$_POST['comida'];


$sql1="INSERT INTO re_dili(fk_idd6,fk_idd7) VALUES ($dieta,$comida)";
$query=mysqli_query($conexion,$sql1);


?>