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

<script>
function validar(formulario)
{

if(formulario.txtcasa_id.value=='')
{
alert('Sr Usuario debe ingresar el N° de la casa');
formulario.txtcasa_id.focus();
return false;
}
else if (isNaN(formulario.txtcodigo.value))
{
alert("El codigo ingresado no es un numero");
formulario.txtcasa_id.focus();
return false;
}

if(formulario.txtcasa_representante.value=='')
{
alert('Sr Usuario debe ingresar el nombre');
formulario.txtcasa_representante.focus();
return false;
}

return true;
}
</script>

<?php
	include("..\conexion.php");

	$Codigop=$_GET['id_casa'];
		
	
	$query="SELECT * FROM casas WHERE id_casa =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de casa. Error: ".mysqli_error($link));
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabar_actualiza_casa.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>N° DE CASA</td>
      <td>
        <input name="txtcasa_id" type="text" id="txtcasa_id" size="3" value= "<?php echo $Rs['id_casa'];?>"
      </td>
    </tr>
    <tr>
      <td>NOMBRE DE REPRESENTANTE</td>
      <td>
        <input name="txtcasa_representante" type="text" id="txtcasa_representante" size="40" value= "<?php echo $Rs['casa_representante'];?>"
      </td>
    </tr>
	<tr>
  <tr>
      <td>ESTADO DEL CASILLERO</td>
      <td>
        <form  type="text" size="40" >
          <select name="txtestado_casa" id="txtestado_casa" value= "<?php echo $Rs['casa_estado'];?>">
            <option value="OCUPADO">OCUPADO</option>
            <option value="DESOCUPADO">DESOCUPADO</option>
          </select>
      </td>
    </tr>
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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>