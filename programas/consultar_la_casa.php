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
<title>Consulta de Casa</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA CASA</h1>
<center>
<table width="900" border="1">
		<td>N° CASA</td>	
		<td>ESTADO CASA</td>
		<td>NOMBRE COMPLETO</td>
		<td>CORREO PRINCIPAL</td>
		<td>TELEFONO PRINCIPAL</td>
		</tr>


	<?php
		include("..\conexion.php");
		$casa=$_POST["txtcasa_id"];
		$query="SELECT * from personas inner join casas on id_casa = persona_id_casa and id_casa=$casa";
		
				//die($query);  = Consultar que trae el select

		// $result=mysql_query($query,$link) or die("error en la consulta de productos"); en versiones anteriores
		$result=mysqli_query($link,$query) or die("error en la consulta de casas");
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
			echo "<tr>";
			echo "<td>$row[id_casa]</td><td>$row[casa_estado]</td><td>$row[nombre] $row[apellido]</td><td>$row[correo_principal]</td><td>$row[tel_principal]</td>";
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
				var pagina=./indexA.php';
				location.href=pagina
			}
			setTimeout ('redireccionar()',20000);
		       </script>
		";
	?>
</table>
</body>
</html>