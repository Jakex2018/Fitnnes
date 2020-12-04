<?php

 include'conexion.php';
 $name1=$_POST["name1"];
 $name2=$_POST["name2"];
 $ape1=$_POST["ape1"];
 $ape2=$_POST["ape2"];
 $email=$_POST["email"];
 $contraseña=$_POST['contraseña'];
 error_reporting(0);
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
 for($i=0;$i<strlen($name1);$i++){
      if(is_numeric($_POST['name1'])||strlen($name1)<3||strlen($name1)>15||strpos($permitidos,substr($name1,$i,1))===false){
   header('location: formularioregistro.php');
   return false;
  }

}

for($i=0;$i<strlen($name2);$i++){
      if(is_numeric($_POST['name2'])||strlen($name2)<3||strlen($name2)>16||strpos($permitidos,substr($name2,$i,1))==false){
            echo"ERROR";
            header('location: formularioregistro.php');
            return false;
      }
}

for($i=0;$i<strlen($ape1);$i++) {
      if(is_numeric($_POST['ape1'])||strlen($ape1)<3||strlen($ape1)>30||strpos($permitidos,substr($ape1,$i,1))==false){
            echo"ERROR";
            header('location: formularioregistro.php');
            return false;
      }
}         

for($i=0;$i<strlen($ape2);$i++){
      if(is_numeric($_POST['ape2'])||strlen($ape2)<3||strlen($ape2)>30||strpos($permitidos,substr($ape2,$i,1))==false){
            echo"ERROR";
            header('location: formularioregistro.php');
            return false;
      }
}

  $quitar = ",-";

    if(is_numeric($_POST['email'])||strlen($email)<3||strlen($email)>50){
            echo"ERROR";
            header('location: formularioregistro.php');
            $email=str_replace($quitar);
            return false;
      }else{
             if(strlen($contraseña)<6||strlen($contraseña)>25){
                  echo"ERROR";
                  header('location: formularioregistro.php');
                  return false;
                 }else{
                         $insertar="INSERT INTO ta_cuen(cuen_1n,cuen_2n,cuen_1a,cuen_2a,cuen_cr,cuen_co) VALUES('$name1','$name2','$ape1','$ape2','$email', '$contraseña')";   
                      }
             }
                       

$verificar_usuario=mysqli_query($conexion,"SELECT * FROM ta_cuen WHERE cuen_cr='$email'");
if(mysqli_num_rows($verificar_usuario)>0){
	echo'------------este correo ya esta registrado-------------';
	exit;
}


//ejecutar
$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
	echo'error de registro';

}else{
	echo'registro exitoso';
  header("location:pagina.php");
  echo'<script>alert("Registro exitoso")</script>';
}
//Salir
mysqli_close($conexion);

?>