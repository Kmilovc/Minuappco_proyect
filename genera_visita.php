<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>GENERE VISITA</title>

  <script>
    function validar(formulario) {
      if (formulario.txtcasa_id.value == '') {
        alert('Sr Usuario debe ingresar el codigo');
        formulario.txtcasa_id.focus();
        return false;
      }

      if (isNaN(formulario.txtcasa_id.value)) //Si no (isNaN) es un numero
      {
        alert("El codigo ingresado no es un numero");
        formulario.txtcasa_id.focus();
        formulario.txtcasa_id.value = '';
        return false;
      }

      if (formulario.txtcasa_representante.value == '') {
        alert('Sr Usuario debe ingresar el nombre');
        formulario.txtcasa_representante.focus();
        return false;
      }

      if (formulario.txtcasa_estado.value == '') {
        alert('Sr Usuario debe ingresar el estado de la casa');
        formulario.txtcasa_estado.focus();
        formulario.txtcasa_estado.value = '';
        return false;
      }



      if (formulario.cmbundmedida.value == 0) {
        alert('Sr Usuario debe seleccionar una unidad de medida');
        formulario.cmbundmedida.focus();
        return false;
      }

      return true;
    }
  </script>

  <h1 ALIGN=CENTER>GENERAR VISITA</h1>

</head>




<body>



  <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarvisita.php">

    <div class="container">
      <section class="main row">
        <center>

          <article class="col-md-11">
            <table class="table table-success table-striped table-bordered  table-hover" width="400" border="1">
              <tr>
                <td width=50%>No CASA A VISITAR</td>
                <td>
                  <input name="visitas_id_casas" type="text" id="visitas_id_casas" size=3 />
                </td>
              </tr>
              <tr>
                <td>TIPO VISITA</td>
                <td>
                  <select GENERAL name="tipo_visita" type="text" id="tipo_visita" size=1>
                    <option value="revision del agua">revision del agua</option>
                    <option value="revision de luz">revision de luz</option>
                    <option value="revision de internet">revision de internet</option>
                    <option value="revision del gas">revision del gas</option>
                    <option value="visita personal">visita personal</option>
                    <option value="otra">otra</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>DESCRIPCION VISITA</td>
                <td>
                  <input name="descripcion_visita" type="txt" id="descripcion_visita" size=90>


                </td>
              </tr>
              </tr>
              <tr>
                <td width=50%>FECHA VISITA</td>
                <td>
                  <input name="Fecha_Visita" type="date" id="Fecha_Visita" size=10 />
                </td>
              </tr>

              <tr>


              <tr>
                <td>

                  <center>
                    <input type="submit" name="Submit" value="Enviar" class="btn btn-outline-primary" />
                  </center>
                </td>
                <td>
                  <center>
                    <input type="reset" name="Submit2" value="Restablecer" class="btn btn-outline-primary" />
                  </center>
                </td>
              </tr>
            </table>

  </form>
  <h1> </h1>

  <form action="consultar_visitas.php">
    <button type="submit" class="btn btn-outline-primary">CONSULTAR VISITAS</button>
  </form>
  </center>


</body>

</html>