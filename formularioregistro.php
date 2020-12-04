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
                          ste-letra1 ajuste-letra1-1" href="pagina.php">INICIO <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorletra ajuste-letra1" href="Quienessomos.php" tabindex="-1" aria-disabled="true">Quienes Somos</a>
                          </li>

                           <li class="nav-item colorletra">
                              <a class="nav-link colorletra ajuste-letra2" href="formularioregistro.php" tabindex="-1" aria-disabled="true">Asignar Rutinas</a>
                            </li>
                            <li class="nav-item colorletra">
                                <a class="nav-link colorletra ajuste-letra3" href="formularioregistro.php" tabindex="-1" aria-disabled="true">Asignar Dietas</a>
                              </li>

                      </ul>
                     
                      
                    </div>
                  </nav>
                </nav>
              </aside>
            </div>
      </header>
<body>

<section id="section2"class="container">
    <h3 class="text-uppercase" style="margin-top: 150px; margin-bottom: 80px;margin-left: 450px; justify-content: center; color: black">Registrate
    </h3>
      <div class="row">
        <div class="col-6">
        <form action="registrar.php" method="post" >
        <div class="form-group row">
            <label  for="" class="col-4 col-form-label" style="color: #ffff"> <i> Primer Nombre:</i></label>
            <input type="text" name="name1" id="name1" placeholder="ingresar primer nombre" style="margin-left: 450px; justify-content: center;" class="form-control col-6" required>
          </div>
          <div class="form-group row">
          <label for="" class="col-4 col-form-label" style="color: #ffff"> <i> Segundo Nombre:</i></label>
          <input type="text" name="name2" id="name2" placeholder="ingresar segundo nombre" style="margin-left: 450px; justify-content: center;" class="form-control col-5" required>
        </div>
        <div class="form-group row">
            <label for="" class="col-4 col-form-label" style="color: #ffff"> <i> Primer Apellido:</i></label>
            <input type="text" name="ape1" id="ape1" placeholder="ingresar primer apellido" style="margin-left: 450px; justify-content: center;"class="form-control col-5" required>
        </div>
        <div class="form-group row">
                <label for="" class="col-4 col-form-label" style="color: #ffff"> <i> Segundo Apellido:</i></label>
                <input type="text" name="ape2" id="ape2" placeholder="ingresar segundo apellido" style="margin-left: 450px; justify-content: center;" class="form-control col-5" required>
            </div>
       
            <div class="form-group row">
                    <label for="" class="col-2 col-form-label" style="color: #ffff"> <i> Email: </i></label>
                    <input type="email" name="email" id="email" placeholder="ingresar correo electronico" style="margin-left: 450px; justify-content: center;" class="form-control col-6" require>
                </div>

            <div class="form-group row">
                    <label for="" class="col-2 col-form-label" style="color: #ffff"> <i> Contraseña: </i></label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="ingresar contraseña" style="margin-left: 450px; justify-content: center;" class="form-control col-6" require>
                </div>    
               
            <div class="form-group">

                 
                
                 <input type="submit" href="Registroexito.html" value="Registrar" class="btn btn-primary">
                 
                
            </div>
          </form>
          
  
        </div>
      </div>
    </section>
    
   

</body>

<footer id="barra_n" class="fixed-bottom">
        Fitnnes@2020 Derechos Reservados.
    </footer>
    </html>