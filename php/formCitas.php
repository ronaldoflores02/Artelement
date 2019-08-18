<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../CSS/normalize.css">

    <link rel="stylesheet" href="../Codigo css/Estilos.css">

<link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900"rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Italianno&display=swap" rel="stylesheet">



    <title>Citas</title>
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



#demo {

-moz-transform: scale(1.0) translate(0px, 19px);

-webkit-transform: scale(1.0) translate(0px, 19px);

-o-transform: scale(1.0) translate(0px, 19px);

-ms-transform: scale(1.0) translate(0px, 19px);

transform: scale(1.0) translate(0px, 19px);

}

/* Input Forms*/

input[type="text"]{

  outline: none;

  padding: 8px;

  display: block;

  width: 300px;

  border-radius: 3px;

  border: 1px solid #eee;

  margin: 20px auto;

}



input[type="submit"] {

  padding: 10px;

  color: #fff;

  background: #0098cb;

  width: 150px;

  margin: 15px auto;

  margin-top: 0;

  border: 0;

  border-radius: 3px;

  cursor: pointer;

}

input[type="submit"]:hover {

  background-color: #00b8eb;

}



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
      /*imprime en la esquina que usuario es*/
      if (isset($_SESSION['usuario']))
      {
      echo "<h4 align='right'>Usuario:".$_SESSION['usuario']."</h4>";
      echo "<h5 align='right'>
      <a href='cerrarSesion.php'>[Cerrar Sesion]</a></h5>";

      }
      else
      {
        header("Location:Inicio de sesion.php");
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
                <a href="Inicio de sesion.php">Contacto</a>

    <nav>

    </div><!--Barra-->

    </div> <!--Contenedor-->





    </header>

  <div class="container">

    <p align="center">Perfil de Clientes</p>

    <form action="" method="POST">

   

<p>Nombre del cliente</p>

<div class="form-group">

<input class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre" required>

</div>

<p>Apellido Paterno</p>

<div class="form-group">

<input class="form-control" type="text" name="ap_paterno" placeholder="Escribe tu apellido paterno" required>

      </div>

<p>Apellido Materno</p>

<div class="form-group">

<input class="form-control" type="text" name="ap_materno" placeholder="Escribe tu apellido materno" required>

</div>

<p>Direccion</p>

<div class="form-group">

<input class="form-control" type="text" name="direccion" placeholder="Escribe tu direccion" required>

</div>

<p>Telefono</p>

<div class="form-group">

        <input class="form-control" type="text" name="telefono" placeholder="Escribe tu telefono" required>

      </div>

  

              <p>Correo</p>

    <div class="form-group">

        <input class="form-control" type="text" name="Correo" placeholder="Escribe tu correo" required>

      </div>

  



      <p>Eliga la fecha y la hora</p>

      <p>Fecha:</p>

      <input type="date" id="fecha"><p><p></p></p>

      <p>Hora:</p>

      <input type="time" id="hora" min="9:00" max="17:30" value=""><br><br>



  <button type="submit" class="btn btn-lg boton">Enviar</button>

</body>

</html>

<script src="../JS/js/jquery-3.4.1.min.js"></script>

<script src="../S/js/bootstrap.min.js"></script>



