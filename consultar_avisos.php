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
<h1 ALIGN=CENTER>avisos parroquiales</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>NUMERO DE AVISO</td>
		<td>ASUNTO DEL AVISO</td>
		<td>DESCRIPCION DEL AVISO</td>
		<td>FECHA DE EMISION AVISO</td>
        
		</tr>

	<?php
    $varsesion = $_SESSION["usuario"];
		include("..\conexion.php");
		$query="SELECT * from avisos";

		$result=mysqli_query($link,$query) or die("error en la consulta de casa");
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[id_aviso]</td><td>$row[asunto_aviso]</td><td>$row[descripcion_aviso]</td><td>$row[fecha_aviso]</td>";
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
