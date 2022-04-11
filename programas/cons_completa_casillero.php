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
<title>Consulta el Casillero</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA CASILLERO</h1>
<center>
<table width="900" border="1">
	<tr>
		<th>N° CASILLERO</th>
		<th>ESTADO DE CASILLERO</th>
		<th>DESCRIPCION DEL CASILLERO</th>
	</tr>

	<?php
		include("..\conexion.php");
		$codigo=$_POST["txtcasi_id"];
		$query="SELECT id_casillero,estado_casillero,descripcion_casillero
				FROM casillero
				WHERE id_casillero = $codigo";
				//die($query);  = Consultar que trae el select

		// $result=mysql_query($query,$link) or die("error en la consulta de productos"); en versiones anteriores
		$result=mysqli_query($link,$query) or die("error en la consulta de los casillero");
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
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
			setTimeout ('redireccionar()', 20000);
		       </script>
		";
	?>
</table>
</body>
</html>