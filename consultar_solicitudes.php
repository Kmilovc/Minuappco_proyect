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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta casa</title>
</head>
<body>
<h1 ALIGN=CENTER>SOLICITUDES GENERADAS</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>No DE SOLICITUD</td>
		<td>CASA QUE GENERA LA SOLICITUD</td>
		<td>TIPO DE SOLICITUD</td>
		<td>FECHA DE LA SOLICITUD</td>
        <td>RESPUESTA DE LA SOLICITUD</td>
        <td>FECHA DE LA RESPUESTA</td>
        
		</tr>

	<?php
    $varsesion = $_SESSION["usuario"];
		include("..\conexion.php");
		$query="SELECT * from solicitudes";

		$result=mysqli_query($link,$query) or die("error en la consulta de casa");
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[id_solicitud]</td><td>$row[solicitud_id_casa]</td><td>$row[Descripcion_Solicitud]</td>
			<td>$row[Tipo_Solicitud]</td><td>$row[Fecha_Solicitud]</td><td>$row[solicitud_respuesta]</td><td>$row[solicitud_fecha_respuesta]</td>";
			echo "</tr>";
			}
		}
		else
		{
			echo"La consulta no encontro registros asociados";
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
