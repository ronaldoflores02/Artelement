<?php

 

  class Database

  {

      private $PDOLocal;

      private $user="arte";

      private $password="12345";

      private $server="mysql:host=arte.uttics.com; dbname=arte_element";



      function conectarBD(){

          try{

              $this->PDOLocal= new PDO($this->server, $this->user, $this->password);

          }

          catch(PDOException $e){

              echo $e->getMessage();

          }

      }



      function desconectarBD(){

          try{

              $this->PDOLocal= null;

          }

          catch (PDOException $e){

            echo $e->getMessage();

          }

      }



      function seleccionar($query){

          try{

              $resultado=$this->PDOLocal->query($query);

              $renglon=$resultado->rowCount();



              if($renglon>0)

              {

                  while($row= $resultado->fetch(PDO::FETCH_ASSOC))

                  {

                      $Datos[]=$row;

                  }

              }



              else

              {

                  $Datos[]=null;

              }

              return $Datos;

          }

          catch(PDOException $e){

              echo $e->getMessage();

          }

      }



      function ejecutarSQL($query){

          try{

              $this->PDOLocal->query($query);

              

          }

          catch(PDOException $e){

            echo $e->getMessage();

        }

      }

      function verificaLogin($usuario,$contrasena)
      {
      	try {
      		$pase=0;

      		$query="select * from usuario where usuario='$usuario'";

      		$consulta=$this->PDOLocal->query($query);

      		while ($registro=$consulta->fetch(PDO::FETCH_ASSOC))
      		{
      			if (password_verify($contrasena,$registro['contrasena'])) {
      				$pase++;
      			}
      		}
      		if ($pase>0)
      		{
      			Session_start();
      			$_SESSION["usuario"]=$usuario;
      			echo "<div class='alert alert-success'>";
      			echo "<h2 align='center'>Bienvenid@ ".$_SESSION['usuario']."</h2>";
      			echo "</div>";

      			header("refresh:2; ../index.php");
      		}
      		else
      		{
      			echo "<div class='alert alert-danger'>";
      			echo "<h2 align='center'>Usuario o contraseña incorrecto</h2>";
      			echo "</div>";

      			header("refresh:2; login.php");

      		}


      	} catch (PDOException $e)
      	{
      		echo $e;      		
      	}



      }





      function cerrarSesion()

      {

          session_start();

          session_destroy();



          header("Location:../index.php");

      }

























  }



?>