<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../JS/js/bootstrap.css">

    <link rel="stylesheet" href="../CSS/normalize.css">

    <link rel="stylesheet" href="../Codigo css/Estilos.css">

<link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900"rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Italianno&display=swap" rel="stylesheet">



    <title>Login</title>





    <style>

    



    body {

  margin: 0;

  padding: 0;

  font-family: 'Roboto', sans-serif;

  text-align: center;

  background: black;

}



form{

  background: #FF0000;

  padding: 40px;

  margin: auto;

  max-width: 500px;
  border-radius: 15px;


}

body

    {

      background-color: #000000;

      padding-top: 2em;
      color: white;

    }

    p

{

    color: white;

  font-size:30px;

  font-family: 'Italianno', cursive;

}



    img

    {

        width: 150px;

        height: 150px;

        object-fit: cover;

    }

     .navegacion

     {

       font-family: 'Italianno', cursive;

       font-size: 30px;



     }
     .boton
     {
      background-color: #FFFFFF;
     }





    

    </style>

</head>

<body>
    <?php
Session_start();
    if(isset($_SESSION["usuario"]))
    {
      echo "<div class='alert alert-warning'>
      <h2 align='center'>Ya tienes una sesion activa, usuario:".$_SESSION["usuario"]."</h2></div>";

      echo "<h5 align='right'>
        <a href='scripts/cerrarSesion.php'>[Cerrar Sesion]</a></h5>";

    }
    else
    {
    echo "<div class='Location:../index.php'></div>";
    }

  ?>

  <div align="center">

    <img src="/IMG/arteelemnt.png" width="250px" height="250px" alt="Artelement">

  </div>    

  <header class="nosla sin-sinima">

    <div class="contenedor contenedor-header">

    <div class="barra">

        <nav" class="navegacion">

                <a href="../index.php">Inicio</a>

                <a href="galeria.php">Galeria</a>

                <a href="formCitas.php">Citas</a>

                <a href="tienda.php">Tienda</a>

                <a href="contactosi.php">Contacto</a>
                <a href="Inicio de sesion.php">Registrate</a>

    <nav>

    </div><!--Barra-->

    </div> <!--Contenedor-->





    </header>

  <div class="container">
 <form action="../scripts/guardausuario.php" method="post" class="cuadro">
    <h3 align="center">Registrar Usuario</h3>
    <br>
        
    <div class="form-group" align="left">
    Nombre:
      <input class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre" required autofocus>
    </div>
    <div class="form-group" align="left">
    Apellidos:
      <input class="form-control" type="text" name="apellidos" placeholder="Escribe tus apellidos" required autofocus>
    </div>

    <div class="form-group"align="left">
      Correo:
      <input class="form-control" type="text" name="correo" placeholder="Escribe tu correo">
    </div>

        <br>
    <button type="submit" class="btn boton btn-lg">Registrar</button>
  </form>
  <br><br>
   
</body>

</html>

<script src="../JS/js/jquery-3.4.1.min.js"></script>

<script src="../S/js/bootstrap.min.js"></script>



