<?php
include "conexion.php";
$datos = $conexion->query("SELECT* from ta_cuen");
?>
<!DOCTYPE html>
<html>
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
                          ste-letra1 ajuste-letra1-1" href="administrador.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                       

                      </ul>
                     
                      
                    </div>
                  </nav>
                </nav>
              </aside>
            </div>
      </header>



</head>
<body>
 <div>
    <section id="section1"class="container">
    <h3 class="text-uppercase" style="margin-top: 150px; margin-bottom: 80px;margin-left: 450px; justify-content: center; color: black">MIGRACION
    </h3>
      <div class="row">
        <div class="col-6">
        
          <form method="post" id="addproduct" action="importar.php" enctype="multipart/form-data" role="form">
          <div>
    <label class="col-lg-2 control-label">Archivo (.xlsx)*</label>
      <input type="file" name="name"  id="name" placeholder="Archivo (.xlsx)">
       <br><br>
      <button type="submit" class="btn btn-primary">Importar Datos</button>
      </div>
      </form>
  
        </div>
      </div>
    </section>
      </div>




 

</body>
</html>