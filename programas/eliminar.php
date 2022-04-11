<?php
include("..\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['id_casa'];
	$query="SELECT * FROM casas WHERE id_casa = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta la casa. Error: ".mysqli_error($link));
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabar_actualiza.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>
				
				<tr>
					<td width=50%>NUMERO DE LA CASA</td>
					<td>
						<input name="txtcasa_id" type="text" id="txtcasa_id" size=3 readonly="readonly" value= "<?php echo $Rs['id_casa'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>Nombre de representante</td>
					<td>
						<input name="txtcasa_representante" type="text" id="txtcasa_representante" size=40 readonly="readonly" value= "<?php echo $Rs['nombre'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>Estado de la casa</td>
					<td>
						<input name="txtcasa_estado" type="text" id="txtcasa_estado" size=10 readonly="readonly" value= "<?php echo $Rs['casa_estado'];?>"/>
					</td>
				</tr>
				
					
								
			<tr>
				  <td>
					<center>
						<input type="submit" name="Submit" value="Enviar" />
					</center>
				  </td>
				  <td>
					<center>
						<input type="reset" name="Submit2" value="Restablecer" />
					</center>
				  </td>
				</tr>
			
				</table>
					
				<input type="hidden" name="Accion" value="Delete" />
				
			</form>
			</center>
			<?php
		}
	}
	mysqli_close($link);
?>