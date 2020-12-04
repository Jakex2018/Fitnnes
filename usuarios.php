

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness</title>
    <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>

   

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
                    ste-letra1 ajuste-letra1-1" href="administrador.php">INICIO <span class="sr-only">(current)</span></a>
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
      <th>id_cuen</th>
      <th>cuen_1n</th>
      <th>cuen_2n</th>
      <th>cuen_1a</th>
      <th>cuen_2a</th>
      <th>cuen_cr</th>
      <th>cuen_co</th>
      <th>ACCIONES</th>
    </tr>

    <?php
      require'conexion.php';
      $query=mysqli_query($conexion,"SELECT id_cuen,cuen_1n,cuen_2n,cuen_1a,cuen_2a,cuen_cr,cuen_co FROM ta_cuen WHERE cuen_1n!='admin'");
      $result=mysqli_num_rows($query);
      if($result>0){
      	while ($data=mysqli_fetch_array($query)) {

    ?>
    <tr>
      <td><?php echo $data['id_cuen'];?></td>
      <td><?php echo $data['cuen_1n'];?></td>
      <td><?php echo $data['cuen_2n'];?></td>
      <td><?php echo $data['cuen_1a'];?></td>
      <td><?php echo $data['cuen_2a'];?></td>
      <td><?php echo $data['cuen_cr'];?></td>
      <td><?php echo $data['cuen_co'];?></td>
      <td>
        
        <form action="eliminar.php" method="post">
          <input type="hidden" name="id_cuen" value="<?php echo $data['id_cuen'] ;?>">
          <input type="submit" value="Eliminar"class="btn btn-primary">
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