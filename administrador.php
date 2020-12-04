<?php
   if(!empty($_SESSION)){

   header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitnnes</title>

    <script type="text/javascript">alert('BIENVENIDO ADMINISTRADOR')</script>
    
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

   
</head>


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
                          </li>
                           <li class="nav-item colorletra">
                            <a class="nav-link colorletra ajuste-letra2" href="logout.php" tabindex="1" aria-disabled="true">Cerrar Sesion</a>           
                          </li>
                         <li class="nav-item colorletra">
                          <a class="nav-link colorletra ajuste-letra3" href="usuarios.php" tabindex="-1" aria-disabled="true">Registro Usuarios</a>
                          </li>

                          <li class="nav-item colorletra">
                          <a class="nav-link colorletra ajuste-letra3" href="Migracion.php" tabindex="-1" aria-disabled="true">Migracion</a>
                          </li>

 
                         

                      </ul>
                    </div>
                  </nav>
                </nav>
              </aside>
            </div>
      </header>
<body>


<aside id="aside1">
    <div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagenes/carrusel1.jpg" class="d-block mx-auto" alt="First slide" style="margin-left: 250px; justify-content: center;" width="60%" height="500px">
            <div class="carousel-caption">
                <h3 style="font-size:  38px; color:#ffff;"> <b> <i> Asigna tus rutinas </i> </b></h3>
                </div>                 
          </div>
          <div class="carousel-item">
            <img src="imagenes/carrusel2.jpg" class="d-block mx-auto" alt="Second slide" style="margin-left: 250px; justify-content: center;" width="60%" height="500px">
            <div class="carousel-caption">
                <h3 style="font-size:  38px; color:#ffff;"> <b> <i> Alimentacion balanceada</i> </b></h3>
                </div>           
          
                 
          </div>
        </div>
        <a class="carousel-control-prev" style="margin-left: 80px;" href="#carouselExampleIndicators-1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" style="margin-right: 80px;" href="#carouselExampleIndicators-1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </aside>

    
     

  
  

              

               

<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>

    
</body>
<footer id="barra_n" class="fixed-bottom">
        Fitnnes@2020 Derechos Reservados.
    </footer>
    </html>