<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900"rel="stylesheet">

    <link rel="stylesheet" href="CSS/normalize.css">

    <link rel="stylesheet" href="/Codigo css/Estilos.css">

    <link rel="stylesheet" href="/css/bootstrap.css">

    <link href="https://fonts.googleapis.com/css?family=Italianno&display=swap" rel="stylesheet">



    <!-- Animate css -->

	<link rel="stylesheet" href="/Codigo css/animate.css">

	<!-- Icomoon Icon Fonts-->

	<link rel="stylesheet" href="Codigo css/icomoon.css">

	<!-- Bootstrap  -->

	<link rel="stylesheet" href="Codigo css/bootstrap.css">

	<!-- Magnific Popup -->

	<link rel="stylesheet" href="Codigo css/magnific-popup.css">

	<!-- Owl Carousel  -->

	<link rel="stylesheet" href="Codigo css/owl.carousel.min.css">

	<link rel="stylesheet" href="Codigo css/owl.theme.default.min.css">

	<!-- Theme style  -->

	<link rel="stylesheet" href="Codigo css/style.css">

	<!-- Modernizr JS -->

	<script src="js/modernizr-2.8.3.min.js"></script>



  

    <title>Artelement</title>

    <style>

    body

    {

      background-color: #000000;

      padding-top: 2em;

    }

h1,h2

    {

       color: black;

       font-size:30px;

       font-family: 'Italianno', cursive;

    }

    .edit

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

    div.card

    {

        background-color:black;

    }

     .navegacion

     {

       font-family: 'Italianno', cursive;

       margin: auto;

       font-size: 30px;

     }



     .tamaño

     {

     	width: 180px;

        height: 180px;

     }

.ladito

{

  font-family: 'Italianno', cursive;

  float: right;

  color: white;

   font-size:30px;

}





    </style>







</head>







<body>

  <?php

  Session_start();

  if(isset($_SESSION['usuario']))

  {

    echo "<h4 align='right'>Usuario:".$_SESSION['usuario']."</h4>";

    echo "<h5 align='right'><a href='scripts/cerrarSesion.php'[Cerrar Sesion]></a></h5>";

  }



  ?>



  <div align="center">

    <img src="/IMG/arteelemnt.png" alt="Artelement">

  </div>

    <header class="nosla sin-sinima">

       
       

        <div class="contenedor contenedor-header">

        <div class="barra">

            <nav" class="navegacion">

                    <a href="index.php">Inicio</a>

                    <a href="php/galeria.php">Galeria</a>

                    <a href="php/formCitas.php">Citas</a>

                    <a href="php/tienda.php">Tienda</a>

                    <a href="php/contactosi.php">Contacto</a>

        <nav>

        </div><!--Barra-->

        </div> <!--Contenedor-->

        </header>







              <div class="bd-example" align="center">

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <!--indicadores de imagenes-->

    <ol class="carousel-indicators">

      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

    </ol>

    <div class="carousel-inner">

      <div class="item active">

        <img src="IMG/tatto.PNG" class="d-block img-responsive tamaño" alt="...">

      </div>

      <div class="item">

        <img src="IMG/tatto2.PNG" class="d-block img-responsive tamaño" alt="...">

      </div>

      <div class="item">

        <img src="IMG/tatto3.PNG" class="d-block img-responsive tamaño" alt="...">

      </div>

    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

      <span class="sr-only">Previous</span>

    </a>

    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">

      <span class="carousel-control-next-icon" aria-hidden="true"></span>

      <span class="sr-only">Next</span>

    </a>

  </div>

</div>

          

 <div class="contenedor">

                  <br>

                   <br>

                    <h1 class="encab-nostros">Conoce sobre nosotros</h1>

                    <p class="edit">

Somos una empresa que desde hace 9 años, se ha tomado grandes decisiones a sobre el crecimiento en Torreón del desarrollo del tatuaje y su derivados, para ello pensamos en la gente para expresarse libremente y yo como tatuador plasmar sus ideas en el cuerpo tomando todas las debidas precauciones de salud e higiene para cuidar de nuestros clientes.

                    </p>

                </div>

                <section class="contenedor">

                    <h2 class="encab-nostros">Empresa en Crecimiento</h2>

                    <p class="edit">

                     Nosotros vemos el gran crecimiento aqui en la laguna para  abrir una 						 tienda de material de tatuaje, ya que esa es la problematica de no 						 encontrar facilmente y barato, para ello estamos convencidos de abrir una 						nueva puerta a dar conocer los servicios que ofrecemos.

                    </p>

                    </section>

                <footer class="site-footer seccion">

                <div class="conenedor contenedor-footer ">

                <p class="copyright  edit">Todos los derechos reservados &copy;</p>

                </div>

                </footer>



</body>

</html>

<script src="js/jquery-3.2.1.slim.min.js"></script>

<script src="js/bootstrap.min.js"></script>















































