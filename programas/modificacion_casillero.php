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

	$Codigop=$_GET['id_casillero'];
		
	
	$query="SELECT * FROM casillero WHERE id_casillero =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta del casillesa. Error: ".mysqli_error($link));
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabar_actualiza.php">
				
	  <table width="400" border="1">
      <tr>
        <td width=50%>N° de casillero</td>
          <td>
            <input name="txtcasillero_id" type="text" id="txtcasillero_id" size="3" value= "<?php echo $Rs['id_casillero'];?>">
          </td>
    </tr>
    
    <tr>
      <td>ESTADO DEL CASILLERO</td>
      <td>
        <form  type="text" size="40" >
          <select name="txtestado_casillero" id="txtestado_casillero" value= "<?php echo $Rs['estado_casillero'];?>">
            <option value="LLENO">LLENO</option>
            <option value="VACIO">VACIO</option>
          </select>
      </td>
    </tr>
    <tr>
        <td width=50%>DESCRIPCION DEL CASILLERO</td>
          <td>
            <input name="txtdescripcion_casillero" type="text" id="txtdescripcion_casillero" size="50" value= "<?php echo $Rs['descripcion_casillero'];?>">
          </td>
    </tr>
	<tr>
      
 
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