<?php

session_start();
error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == " ") {
	echo "<script> alert('ACCESO DENEGADO')</script>";
	echo " <script>
			function redireccionar()
			
				var pagina='../index.php';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 2000);
		       </script>
		";
	die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONSULTA</title>
	<link rel="stylesheet" href="/css/stilomcc.css">
</head>

<body>
	<header>
		<div class="container">
			<h1 ALIGN=CENTER>LISTADO DE CASILLERO</h1>
		</div>
	</header>
	<div class="container">
		<form action="acusar_recibido.php">
			<section class="main row">
				<center>
					<article class="col-md-9">
						<table class="table table-success table-striped">
							<tr>
								<th>N° CASILLERO</th>
								<th>ESTADO DEL CASILLERO</th>
								<th>NUMERO DE LA CASA</th>
								<th>NOMBRE</th>
								<th>TELEFONO</th>
							</tr>

							<?php
							include("..\conexion.php");
							$cedula = $_SESSION["usuario"];
							$query = "SELECT * FROM casillero 
											INNER JOIN casas ON id_casa = id_casillero
											INNER JOIN personas on persona_id_casa = id_casillero  where usuario_id = $cedula";

							$result = mysqli_query($link, $query) or die("error al consultar N° casillero");
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_array($result)) {
									echo "<tr>";
									echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]<td>$row[nombre] $row[apellido]</td><td>$row[te_principal]";
									echo "</tr>";
								}
							} else {
								echo "La consulta no encontro registros asociados";
							}

							echo " <script>
											function redireccionar()
											{
												var pagina='../indexR.php';
												location.href=pagina
											}
											setTimeout ('redireccionar()', 15000);
											</script>
										";
							?>
						</table>


						<input type="submit" name="acusar_recibido.php" value="ACUSAR RECIBIDO">

					</article>
			</section>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>