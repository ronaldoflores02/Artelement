<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900"rel="stylesheet">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="../Codigo css/Estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Italianno&display=swap" rel="stylesheet">
    <title>Artelement</title>
    <style>
    body
    {
      background-color: #000000;
      padding-top: 2em;
    }
    p
    {
       color: white;
       font-size:30px;
       font-family: 'Italianno', cursive;
    }
.ladito
{
  float: right;
  color: white;
   text-decoration: none;
}
 .card 
    {
        background-color:black;
    }
     .navegacion
     {
      font-family: 'Italianno', cursive;
       font-size: 30px;
     }

         img
   {

        width: 150px;

        height: 150px;

        object-fit: cover;

    }
</style>







  <?php



  Session_start();



  if(isset($_SESSION['usuario']))



  {
    echo "<h4 align='right'>Usuario ".$_SESSION['usuario']."</h4>";
    echo "<h5 align='right'><a href='cerrarSesion.php'[Cerrar Sesion]></a></h5>";
  }


  ?>
    <title>Productos</title>
</head>
<body>
  
   <div align="center">
    <img src="../IMG/arteelemnt.png" width="250px" height="250px" alt="Artelement">
  </div>
<div class="navegacion col-md-10 col-9 col-sm-4">
  
</div>

    <header class="nosla sin-sinima">
      <p><a class="ladito barra" href="Inicio de sesion.php" >Iniciar sesion</a></p>
        <div class="contenedor contenedor-header">
          
        <div class="barra">
          
          <nav" class="navegacion">
             		<a href="../index.php">Inicio</a>
                    <a href="galeria.php">Galeria</a>
                    <a href="formCitas.php">Citas</a>
                    <a href="tienda.php">Tienda</a>
                    <a href="contactosi.php">Contacto</a>       
        <nav>
        </div><!--Barra-->
        </div> <!--Contenedor-->
        </header>
    <center>

   <div class="card-group">
  <div class="card">
    <img src="/IMG/tatto.PNG" class="card  alt="..."  width="150" 
    height="150">
    <div class="card-body">
      <h5 class="card-title">SANTO GRIAL</h5>
      <p class="card-text">$130 USD</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="/IMG/tatto2.PNG" class="card walt="..." width="150"
      height="150" >
    <div class="card-body">
      <h5 class="card-title">LA CASA DEL ZORRO</h5>
      <p class="card-text">$150 USD</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="/IMG/tatto3.PNG" class="card alt="Tatto 3"  width="150"
      height="150">
    <div class="card-body">
      <h3 class="card-title">ISABELLA</h3>
      <p class="card-text">$150 USD</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
      </div>
    <div class="card">
    <img src="/IMG/tatto2.PNG" class="card walt="..." width="150"
      height="150" >
    <div class="card-body">
      <h5 class="card-title">LA CASA DEL ZORRO</h5>
      <p class="card-text">$150 USD</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
      <div class="card">
    <img src="/IMG/tatto2.PNG" class="card walt="..." width="150"
      height="150" 
    <div class="card-body">
      <h5 class="card-title">LA CASA DEL ZORRO</h5>
      <p class="card-text">$150 USD</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>



    </div>



    



  </div>



</div>



      



 </div>



 </center>  



      



                        



                <footer class="site-footer seccion">



                <div class="conenedor contenedor-footer ">



                <p class="copyright">Todos los derechos reservados &copy;</p>



                </div>



                </footer>







</body>



</html>



                                             











<script src="JS/js/jquery-3.4.1.min.js"></script>



<script src="JS/js/bootstrap.min.js"></script>



