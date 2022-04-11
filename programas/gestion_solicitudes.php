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


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PQR's</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA DE SOLICITUDES</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>NUMERO DE DE SOLICITUD</td>
		<td>CASA/PERSONA</td>
		<td>TIPO DE SOLICITUD</td>
        <td>DESCRIPCION DE SOLICITUD</td>		
        <td>FECHA_SOLICITUD</td>
		<td>RESPUESTA</td>
        <td>FECHA_RESPUESTA</td>
		</tr>

	<?php
		include("..\conexion.php");
		$query="SELECT * from solicitudes inner join personas on persona_id_casa = solicitud_id_casa";

		$result=mysqli_query($link,$query) or die("error en la consulta de casa");
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[id_solicitud]</td><td>$row[solicitud_id_casa] / $row[nombre]</td><td>$row[Tipo_Solicitud]</td>
            <td>$row[Descripcion_Solicitud]</td><td>$row[Fecha_Solicitud]</td><td>$row[solicitud_respuesta]</td><td>$row[solicitud_fecha_respuesta]</td>";
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
				var pagina='../indexA.php';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 50000);
		       </script>
		";
	?>
</table>
</body>
</html>