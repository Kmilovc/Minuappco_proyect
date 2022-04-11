<?php
//Este codigo es para que el usuario lo loggeo si no a ingresado los datos correctamente
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

<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include("..\conexion.php");
	$query="Select *
	        From casas
	Order by id_casa";
	$result=mysqli_query($link,$query) or die("Error en la consulta de casas. Error: ".mysqli_error($link));
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
				<td>N° CASA</td>
				<td>NOMBRE DEL REPRESENTANTE</td>
				<td>ESTADO DE LA CASA</td>
				<td>ACCION A REALIZAR</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_casa']."</td>".
					 "<td>".$Rs['casa_representante']."</td>".
					 "<td>".$Rs['casa_estado']."</td>".
					 "<td><a href=modificacion_casa.php?id_casa=".$Rs['id_casa'].">Actualizar</a>
					 <!--a href=eliminar.php?id_casa=".$Rs['id_casa'].">Eliminar</a></th-->".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay productos registrados para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>