<?php
include 'conexion.php';

$rutina= $_POST['rutina'];
$ejercicio=$_POST['ejercicio'];


$sql1="INSERT INTO re_curu(fk_idd5,fk_id01) VALUES ($rutina,$ejercicio)";
$query=mysqli_query($conexion,$sql1);
header("location:Rutinas.php");


?>
<script type="text/javascript">
	alert("Ingreso Exitoso");
</script>