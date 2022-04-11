<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$casa_id=$_POST['txtcasa_id'];
$casa_representante=$_POST["txtcasa_representante"];
$casa_estado=$_POST["txtcasa_estado"]; 


include("..\conexion.php");

$query = "INSERT INTO casa (casa_id , casa_representante , casa_estado)
VALUES ('$casa_id','$casa_representante', '$casa_estado')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexA.html';

</script>";

?>

