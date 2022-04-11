<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>GENERE SOLICITUD</title>

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

  <h1 ALIGN=CENTER>GENERAR SOLICITUD</h1>

</head>




<body>

  <center>

    <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarsolicitud.php">


      <table width="400" border="1">

        </tr>
        <tr>
          <td>CASA QUE EMITE LA SOLICITUD</td>
          <td>
            <input name="solicitud_id_casa" type="txt" id="solicitud_id_casa" size=90>
          </td>
        <tr>
          <td>TIPO SOLICITUD</td>
          <td>
            <select GENERAL name="Tipo_Solicitud" type="text" id="Tipo_Solicitud" size=1>
              <option value="solicitud">solicitud</option>
              <option value="queja">queja</option>
              <option value="reclamo">reclamo</option>

            </select>
          </td>
        </tr>
        <td>DESCRIPCION DE SOLICITUD</td>
        <td>
          <input name="Descripcion_Solicitud" type="txt" id="Descripcion_Solicitud" size=90>
        </td>
        <tr>
          </td>
        </tr>
        </tr>
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

    </form>
    <h1> </h1>

    <form action="consultar_solicitudes.php">
      <button type="submit">CONSULTAR SOLICITUDES GENERADAS </button>
    </form>
  </center>


</body>

</html>