<?php
//este codico es para que el usuario no loguee si no ha ingresado los datos
session_start();
 error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == " " ){
  echo " no tiene acceso ";
  die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Minuappco</title>
		<link rel="stylesheet" type="text/css" href="css/miestilo.css?1.0" media="all">
		<link rel="shortcut icon" href="/img/icono.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/styler.css">
</head>	

	
<body>


	<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="container logo-nav-container">
			<span class="logo"><img src="img/logoM.png" alt="logo" width="240" height="37"></span>
			<!--<span class="site-desc">Jardines de Castilla Etapa 3</span>-->

		</a> <!-- / #logo-header -->
		
		<nav class="navegacion">
			<ul class="menu">
					<li><a href="#">CASILLERO</a>
						<ul class="submenu">
							<li><a href="programas/cons_est_casillero_R.php">ESTADO</a></li>	
							
						</ul>
					</li>

					<li><a href="#">VISITAS</a>
						<ul class="submenu">
							<li><a href="programas\genera_visita.php">ESTADO VISITAS</a></li>
							<!--li><a href="#">PENDIENTES</a-->
								<ul class="submenu2">
								</ul>	
							</li>
						</ul>
					</li>
					<li><a href="#">PARQUEADERO</a>
						<ul class="submenu">
							<li><a href="programas\cons_parqueadero2.php">INFORMACION</a></li>
								<ul class="submenu2">
								</ul>	
							</li>
						</ul>
					</li>
					<li><a href="#">AVISOS</a>
						<ul class="submenu">
							<li><a href="programas\consultar_avisos.php">VISUALIZACION ANUNCIOS</a></li>
								<ul class="submenu2">
								</ul>	
							</li>
						</ul>
					</li>
					<li><a href="#">SOLICITUDES</a>
						<ul class="submenu">
							<li><a href="programas\generar_solicitud.php">FORMULARIO</a></li>
								<ul class="submenu2">
								</ul>	
							</li>
						</ul>
					</li>
					<li><a href="cerrar_sesion.php">CERRAR SESION</a></li>
			</ul>
		</nav>
	<!-- / nav -->

	</header><!-- / #main-header -->

	
	<section id="main-content">
	
		<article>
			<header>
				<h1>PROYECTO MINUAPPCO -  JARDINES DE CASTILLA 3</h1>
			</header>
			
			<img src="img/port.PNG" alt="portada" />
			
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->

	
	
	<footer id="main-footer">
		<p>CENTRO DE DISEÑO Y METROLOGIA <a href="http://disenometrologia.blogspot.com/">SENA</a></p>
	</footer> <!-- / #main-footer -->
	
	
</body>
</html>
