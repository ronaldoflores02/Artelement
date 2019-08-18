<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900"rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Italianno&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="../Codigo css/Estilos.css">
<link rel="stylesheet" href="../Codigo css/bootstrap.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <style>
    body
    {
        background-color: black;
        color: white;
      padding-top: 2em;
    }
.ladito
{
  float: right;
  color: white;
  font-size:30px;
  font-family: 'Italianno', cursive;
   text-decoration: none;

}
    p
{
    color: white;
  font-size:30px;
  font-family: 'Italianno', cursive;
  
}

h3
{
  font-size:28px;
  font-family: 'Italianno', cursive;

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

     .colorsito{

      background-color: #FF0000;

      padding: 40px;
      width: 300px;
      height: 300px;
      margin: auto;

      border-radius: 15px;

     }

</style>

    <title>Inicio de sesion</title>

    
</head>
<body >

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
                <img src="/IMG/arteelemnt.png" width="200px" height="200px" alt="Artelement">
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
                        <nav>
                        </div><!--Barra-->
                        </div> <!--Contenedor-->
                        </header>

    <div class="contenedor" >
        <div class="login">
          <article class="fondo">
            <h3 align="center">Inicio de Sesión</h3>
            <form class="colorsito" action="#" method="post">
              <div class="form-group">Nombre de usuario <br><br>
              <input class="inp" type="text" name="usuario" value="" placeholder="Usuario"><br>
              </div>
              <div class="from-group">Contraseña <br><br>
           <input class="inp" type="password" name="pass" value="" placeholder="Password"><br>
              </div>



             



              <button type="submit" name="inicio">Iniciar Sesión</button>

              <a href="Registrate.php">Registrate</a>



            </form>



          </article>



          <br><br>



        </div>
</body>



</html>







<script src="/JS/jquery-3.4.1.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>



<script src="https://code.jquery.com/jquery-latest.js"></script>