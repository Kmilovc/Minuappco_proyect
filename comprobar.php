<?php
$usuario=$_POST["user"];
$password=$_POST["pass"];
 	session_start();
	$_SESSION["usuario"]=$usuario;
	// include("conexion.php");
	$link= mysqli_connect("localhost","root","","jardines_de_castilla");
	$consulta = ("SELECT * FROM personas where  usuario_id = '$usuario' and contrasena_personas = '$password'");
	//$result=mysqli_query($link,$query) ;
	 $resultado=mysqli_query($link,$consulta);
	 $filas=mysqli_fetch_array($resultado);
		
	if($filas["personas_id_roll"]==1){ // Administrador
		$_SESSION["usuario"]=$usuario;
				header("location:indexA.php");

	} 
	elseif ($filas["personas_id_roll"]==2){ //portero
			$_SESSION["usuario"]=$usuario;
				header("location:indexP.php");
		}
	elseif ($filas["personas_id_roll"]==3){ //residente
			$_SESSION["usuario"]=$usuario;
				header("location:indexR.php");
		}
	
	 else {
		header("location:login.php");
		}	

	
			mysqli_free_result($resultado);
			mysqli_close($conexion);
			
?>