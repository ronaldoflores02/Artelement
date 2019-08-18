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



    <title>Usuario</title>





    <style>

    



    body {

  margin: 0;

  padding: 0;

  font-family: 'Roboto', sans-serif;

  text-align: center;

  background: black;

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

<div class="container">
  <?php
  include 'conexion.php';
  $db=new Database();
  $db->conectarBD();
  extract($_POST);

  $hash=password_hash($contrasena, PASSWORD_DEFAULT);

  $cadena="insert into usuario(usuario,contrasena) values ('$usuario','$hash')";
  $db->ejecutaSQL($cadena);
  $db->desconectarBD();

  echo "<div class='alert alert-success'> Usuario Registrado</div>";
  header("refresh:2,login.php");

  ?>

</body>

</html>

<script src="../JS/js/jquery-3.4.1.min.js"></script>

<script src="../S/js/bootstrap.min.js"></script>



