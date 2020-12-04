

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness</title>
    <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
           $("#rutina").change(function(){
               $("#rutina option:selected").each(function(){
                   id_ruti=$(this).val();
                   $.post("includes/getejercicio.php",{id_ruti:id_ruti},function(data){
                       $("#ejercicio").html(data);
                   });
               });
           })
      });
    </script>


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo_index.css">

    <style>
      table{
        border-collapse: collapse;
        font-size: 12pt;
        font-family: 'arial';
        width: 100%;
      }

      table tr:nth-child(add){background: #FFF;}

      table th{
        text-align: left:;
        padding: 10px;
        background: #3d7ba8;
        color:#FFF;
      }

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
      <img src="imagenes/fondo2.jpg" class="img-fluid" width="2100px">
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
                        <a class="nav-link colorletra ajuste-letra2" href="dieta.php" tabindex="-1" aria-disabled="true">Asignar dieta</a>
                      </li>
                      <li class="nav-item colorletra">
                          <a class="nav-link colorletra ajuste-letra3" href="Rutinas.php" tabindex="-1" aria-disabled="true">Asignar Rutinas</a>
                        </li>
                </ul>
               
               
              </div>
            </nav>
          </nav>
        </aside>
      </div>
</header>

<body id="body">       

 <section class="container">
            <p style="margin-top: 15%" class="text-uppercase"> <i style="color: #ffff; font-size: 20px;"> administra tus rutinas..</i> </p>
           
  <table>
    <tr>
      <th>ID</th>
      <th>Rutina</th>
      <th>Ejercicio</th>
      <th>ACCIONES</th>
    </tr>

    <?php
      include"conexion.php";
      $query=mysqli_query($conexion,"SELECT fk_id01,no_ruti,no_ejer FROM re_curu INNER JOIN tipo_ru ON re_curu.fk_idd5=tipo_ru.id_ruti INNER JOIN ta_ejer ON re_curu.fk_id01=ta_ejer.id_ejer");
      $result=mysqli_num_rows($query);
      if($result>0){
      	while ($data=mysqli_fetch_array($query)) {

    ?>
    <tr>
      <td><?php echo $data['fk_id01'];?></td>
      <td><?php echo $data['no_ruti'];?></td>
      <td><?php echo $data['no_ejer'];?></td>
      <td>
        
        <form action="eliminaru.php" method="post">
          <input type="hidden" name="fk_id01" value="<?php echo $data['fk_id01']; ?>">
          <input type="submit" value="Eliminar" class="btn btn-primary">
        </form>
      </td>
    </tr>
    
    <?php
      	}
      }
    ?>
  </table>                  
 </section>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>

</body>

<footer id="barra_n" class="fixed-bottom">
    Fitnnes@2020 Derechos Reservados.
</footer>
</html>