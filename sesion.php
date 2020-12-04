<?php
session_start();
require'conexion.php';
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

if(empty($_POST)){

   header("location:login.php");
}
$query=mysqli_query($conexion,"SELECT*FROM ta_cuen WHERE cuen_cr='".$email."'and cuen_co='".$contraseña."'");
$r=mysqli_num_rows($query);
if($r>0){
   echo'<script>alert("exito")</script>';
  
}else if($r==0){
  $error="error";
  echo'<script>alert("Invalido")</script>';
  header("location:login.php");
  return $error;

}
  
if(!empty($_POST)){
$sql=mysqli_query($conexion,"SELECT * FROM ta_cuen WHERE pass_ad=$contraseña");
  if($f2=mysqli_fetch_array($sql)){
     if($contraseña==$f2['pass_ad']){
     $_SESSION['cuen_id']=$f2['cuen_id'];
     header('location: administrador.php');
     echo'<script>alert("bienvenido administrador")</script>';
     echo "<script>location.href='administrador.php'</script>";
     }
  }

}    


?>




<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitnnes</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo_index.css">
    
       <style>
      #aside1{    
        background: url(imagenes/fondo1.jpg);
         background-repeat: round;
        height: 600px;
        margin-left: 12%;
        margin-right: 12%;

      }
      #section1{
        background: url(imagenes/mision.jpg);
        background-repeat: round;
        height: 600px;
        margin-left: 12%;
        margin-right: 12%;
      }
    
      #carousel2{       
        background: url(imagenes/fondo1.jpg);
        background-repeat: round;
        height: 100%;
      }
    
      #section2{
        
        background: url(imagenes/fondo1.jpg);
        background-repeat: round;
        height: 100%;

    }
    </style>

   
</head>

<script type="text/javascript">
	



</script>

<header id="header2">
        <div class="fixed-top">
            <img src="imagenes/fondo2.jpg" class="img-fluid"  width="2100px">
          </div>
            <div class="fixed-top">
            <aside id="barra-nav">
                <nav id="barra1" class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link colorletra aju
                          ste-letra1 ajuste-letra1-1" href="paginasesion.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorletra ajuste-letra1" href="QuienesSesi.php" tabindex="-1" aria-disabled="true">Quienes Somos</a>
                          </li>

                           <li class="nav-item colorletra">
                              <a class="nav-link colorletra ajuste-letra2" href=Rutinas.php tabindex="-1" aria-disabled="true">Asignar Rutinas <?php if($r==0){header("location:login.php");
                             
                          }?></a>
                            </li>
                            <li class="nav-item colorletra">
                                <a class="nav-link colorletra ajuste-letra3" href="dieta.php" tabindex="-1" aria-disabled="true">Asignar Dietas  <?php if($r==0){header("location:login.php");
                             
                          }?></a>
                              </li>

                      </ul>
                     
                      
                    </div>
                  </nav>
                </nav>
              </aside>
            </div>
      </header>
<body>
     	



    <div>
    <section id="aside1"class="container">
    <h3 class="text-uppercase" style="margin-top: 150px; margin-bottom: 80px;margin-left: 450px; justify-content: center; color: black">INICIA SESION
    </h3>
      <div class="row">
        <div class="col-6">
        <form action="login.php" method="post">
        
            <div class="form-group row">
                    <h3 class="text-uppercase" style="margin-top: 150px; margin-bottom: 80px;margin-left: 450px; justify-content: center; color: black"><?php 

                                                                 if($r==1){
	                                                             echo 'bienvenido:'.$email. 'Has iniciado sesion';

                                                                } 
                                                                ?> </h3>
                    <br>

                     <button class="btn  btn-primary"><a href="logout.php" style="  text-decoration: none; color: #ffff">Cerrar Sesion</button> </a>


                       <button class="btn  btn-primary"><a href="paginasesion.php" style="  text-decoration: none; color: #ffff">Menu Principal</button> </a>




                </div>
          
          </form>
  
        </div>
      </div>
    </section>
      </div>

</body>

<footer id="barra_n" class="fixed-bottom">
        Fitnnes@2020 Derechos Reservados.
   </footer>
  </html>