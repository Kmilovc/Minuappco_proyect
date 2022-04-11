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
<script>
function validar(formulario)
{
	if(form1.txtcasi_id.value=='')
	{
		alert('Sr Usuario debe ingresar el numero de Casillero');
		formulario.txtcasi_id.focus();
		return false;
	}
	else if (isNaN(form1.txtcasi_id.value))
	{
		alert("El valor ingresado no es un numero de casillero");
		formulario.txtcasi_id.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="cons_completa_casillero.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL NUMERO DEL CASILLERO</td>
      <td>
        <input name="txtcasi_id" type="number" id="txtcasi_id" size=3/>
      </td>
    </tr>
    <tr>
      <td>
	<center>
           <input type="submit" name="Submit" value="Consultar" />
		</center>
      </td>

      <td>
	<center>
        <input type="reset" name="Submit2" value="Limpiar" />
		</center>
      </td>
    </tr>
  </table>

</form>
</center>