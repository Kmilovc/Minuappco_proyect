<?php
session_start();
error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == " ") {
	echo "<script> alert('ACCESO DENEGADO');
	var pagina='./login.php';
	location.href=pagina</script>";
	die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
		<section class="main row">
			<center>
				<article class="col-md-6">
					<table class="table table-striped  table-bordered table-hover ">
						<tr>
							<th>N° CASILLERO</th>
							<th>ESTADO DE LA CASA</th>
							<th>DESCRIPCION DEL CASILLERO</th>
						</tr>

						<?php
						include("..\conexion.php");
						$query = "SELECT id_casillero,estado_casillero,descripcion_casillero
										FROM casillero";

						$result = mysqli_query($link, $query) or die("error al consultar N° casillero");
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
								echo "</tr>";
							}
						} else {
							echo "La consulta no encontro registros asociados";
						}

						echo " <script>
											function redireccionar()
											{
												var pagina='../indexA.php';
												location.href=pagina
											}
											setTimeout ('redireccionar()', 50000);
											</script>
										";
						?>
					</table>
				</article>
		</section>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>