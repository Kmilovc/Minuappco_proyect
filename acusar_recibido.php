<?php

session_start();
 error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == " " ){
	echo "<script> alert('ACCESO DENEGADO')</script>";
	echo " <script>
			function redireccionar()
			
				var pagina='../index.php';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 2000);
		       </script>
		";
  die();
}
?>
<?php
include("..\conexion.php");
$idusu= $_SESSION ["usuario"];
$new_estado='desocupado';
$actualizar = "UPDATE casillero SET estado_casillero = '$new_estado' WHERE casi_usu_id = '$idusu'";
$resultado = mysqli_query( $link, $actualizar ) or die ( "NO SE ACTUALIZO EL REGISTRO");

if($new_estado=='desocupado'){ // residente
   
    echo "<script> alert('EL CASILLERO SE ENCUENTRA VACIO');
  var pagina='../indexR.php';
  location.href=pagina</script>";
  die();

    } 

//mysqli_close( $link );
?>
