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
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
	<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Consulta casa</title>
</head>

<body>
	<h1 ALIGN=CENTER>LISTADO DE VISITAS</h1>
	<center>
		<table width="900" border="1"class="table table-success table-striped">
			<tr>
				<td>NUMERO DE VISITA</td>
				<td>TIPO DE VISITA</td>
				<td>DESCRIPCION DE VISITA</td>
				<td>FECHA DE VISITA</td>
				<td>NUMERO DE CASA</td>
				<td>TELEFONO PRINCIPAL</td>
			</tr>

			<?php
			$varsesion = $_SESSION["usuario"];
			include("..\conexion.php");
			$query = "SELECT * from personas inner join visitas on persona_id_casa = visitas_id_casa WHERE usuario_id=$varsesion";

			$result = mysqli_query($link, $query) or die("error en la consulta de casa");
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>$row[id_visitas]</td><td>$row[tipo_visita]</td><td>$row[descripcion_visita]</td><td>$row[Fecha_Visita]</td><td>$row[visitas_id_casa]</td><td>$row[tel_principal]</td>";
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
			setTimeout ('redireccionar()', 50000);
		       </script>
		";
			?>
		</table>
</body>

</html>