<?php
session_start();
 error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == " " ){
	echo "<script> alert('ACCESO DENEGADO');
	var pagina='./login.php';
	location.href=pagina</script>";
  die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Minuappco</title>
		<link rel="shortcut icon" href=".\img\icono.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/style_Administrador.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
	<header id="main-header">
		
	<a id="logo-header" href="#">
			<span class="container logo-nav-container">
			<span class="logo"><img src="img/Logo_admin.png" alt="logo" width="272" height="18"></span>
			<!--<span class="site-desc">Jardines de Castilla Etapa 3</span>-->

		</a> <!-- / #logo-header -->
		<nav class="navegacion">
			
			<ul class="menu">
					<li><a href="#">CASILLEROS</a>
						<ul class="submenu">
							<li><a href="#">Consultar Casilleros</a>
								<ul class="submenu2">
									<li><a href=".\programas\cons_individual_casillero.php">Consultar por casillero</a></li>
									<li><a href=".\programas\cons_general_casillero.php">Consulta Todas los casilleros</a></li>
								</ul>
							</li>	
							<li><a href="programas/modificar_casillero.php">Modificar casillero</a></li>
						</ul>	
					</li>

					<li><a href="#">CASAS</a>
						<ul class="submenu">
							<li><a href="#">Consultar casa</a>
								<ul class="submenu2">
									<li><a href=".\programas\consulta_casa_unica.php">Consultar por casa unitaria</a></li>
									<li><a href=".\programas\consulta_general_casas.php">Consulta Todas las casas</a></li>
								</ul>	
							</li>
								<li>
									<a href="programas\modificar_casa.php">Modificar casa</a>
								</li>
						</ul>
					</li>
					<li><a href="programas\consulta_visitas.php">VISITAS</a></li>
					<li><a href="programas\consulta_visitas.php">PARQUEADERO</a></li>
					<li><a href="#">AVISOS</a></li>
					<li><a href="programas\gestion_solicitudes.php">PQR'S</a></li>
					<li><a href="cerrar_sesion.php">CERRAR</a></li>
			</ul>
			
		</nav>
	<!-- / nav -->

	</header><!-- / #main-header -->

	
	<section id="main-content">
	
		<article>
			<main>
				<h1>PROYECTO MINUAPPCO -  JARDINES DE CASTILLA 3</h1>
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
							
								<div class="carousel-item active">
									<img class="d-block w-100" src="img/slider_index (1).jpg" alt="First slide" width="500px" height="200px">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="img/slider_index (2).jpg" alt="Second slide" width="500px" height="200px">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="img/slider_index (3).jpg" alt="Third slide" width="500px" height="200px">
								</div>
							
						</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
</main>
			
						
			<div class="content">
				<p>En el sector de Nuevo techo , se ubica el conjunto Jardines de Castilla Etapa 3, el cual es un conjunto de 180 casas, con un parqueadero comunal de 30 espacios, un salón comunal , administración y portería, internamente el conjunto maneja una seria de procesos para su administración pero con el paso con de los años y los cambios del personal a cargo de esta administración estos procesos se quedan cortos ante la demanda de  requerimiento que exige habitantes del conjunto por lo en un primer levantamiento de datos se logró evidenciar que en varias ocasiones los residentes de dicho conjunto tienen quejas por la poca trazabilidad que tiene sus peticiones en la administración, poca comunicación que se tiene con la portería y la administración, poca información que  tienen con los sorteos / asignaciones de espacios en los parqueaderos, adicional a causa de la pandemia por COVID 19 la administración del conjunto perdió mas contacto con sus residente por el aislamiento y trabajo en casa del administrador del conjunto. por medio de un proyecto de software se pretende dar solución a la mayoría de las problemáticas que tiene esta administración y que en un futuro esta propuesta pueda volverse comercial para los intereses del conjunto.</p>
			
			</div>
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->
	
	
	
	<footer id="main-footer">
		<p><span class="logo"><img src="img/logoM.png" alt="logo_minuappco" width="100" height="20"></span>CENTRO DE DISEÑO Y METROLOGIA <a href="http://disenometrologia.blogspot.com/">SENA</a></p>
		
			<!--<span class="site-desc">Jardines de Castilla Etapa 3</span>-->
	</footer> <!-- / #main-footer -->

	
</body>
</html>