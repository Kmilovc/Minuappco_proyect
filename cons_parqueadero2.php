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
<h1 ALIGN=CENTER>PARQUEADEROS DISPONIBLES</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>N° PARQUEADEDRO</td>
		<td>CASA A LA QUE ESTA ASIGNADO EL PARQUEADERO</td>
		<td>TIPO DE PARQUEADERO</td>
		<td>ESTADO DEL CASILLERO</td>
		<td>NUMERO DEL PARQUEADERO</td>
		</tr>

	<?php
		include("..\conexion.php");
		$query="SELECT * from parqueadero  inner join casas on id_casa = parqueadero_id_casa";

		$result=mysqli_query($link,$query) or die("error en la consulta de casa");
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONSULTA</title>
        <link rel="stylesheet" href="/css/stilomcc.css">
    </head>
    <body>
            <header>
                <div class="container">
                    <h1 ALIGN=CENTER>parqueaderos asignados</h1>
                </div>
            </header>
                <div class="container"> 
                <form action="acusar_recibido.php">
                    <section class="main row">
                        <center>
                        <article class="col-md-9">
                            <table class="table table-striped  table-bordered table-hover">
                                        <tr>
                                        <th>N° PARQUEADERO</th>
                                        <th>No CASA A LA QUE ESTA ASIGNADO</th>
                                        <th>TIPO DE PARQUEADERO </th>
                                        <th>NOMBRE</th>
                                        <th>TELEFONO</th>
                                    </tr>

                                    <?php 
                                        include("..\conexion.php");
                                        $cedula=$_SESSION ["usuario"];
                                            $query="SELECT * FROM parqueadero 
                                            INNER JOIN casas ON id_casa = parqueadero_id_casa
                                            INNER JOIN personas on persona_id_casa = parqueadero_id_casa  where usuario_id = $cedula";
                                                                                    
                                        $result=mysqli_query($link,$query) or die("error al consultar N° casillero");
                                        if(mysqli_num_rows($result)>0)
                                        {
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            echo "<tr>";
                                            echo "<td>$row[id_parqueadero]</td><td>$row[parqueadero_id_casa]</td><td>$row[Tipo_Parqueadero]</td><td>$row[nombre] $row[apellido]</td><td>$row[te_principal]";
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
                                            setTimeout ('redireccionar()', 15000);
                                            </script>
                                        ";
                                    ?>
                               
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    </body>

</html>

