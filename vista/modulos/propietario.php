

<form action="" method="post">
 <h2>Registor de Propietario</h2>
  <label for="cc">Número de cedula</label>  
  <input type="text" name="cedula" id="cc" required><br><br>
  <input type="text" name="P_nombre" placeholder="Primer Nombre"><br><br>
  <input type="text" name="S_nombre" placeholder="segundo Nombre"><br><br>
  <input type="text" name="apellidos" placeholder="Apellidos"><br><br>
  <input type="text" name="Direccion" placeholder="Direccion kra, Cl, Tv, Dg"><br><br>
  <input type="text" name="telefono" placeholder="Teléfono"><br><br>
  <input type="text" name="ciudad" placeholder="Ciudad"><br><br>
  <?php
   $registro =  ControladorFormularios::ctrRegistro();
  if($registro == "ok"){
  echo '<script>
       if (window.history.replaceState){
       window.history.replaceState(null, null, window.lacation.href);
       }
   </script>';
   echo 'El Usuario se registró correctamente';
  }
   
  ?>
  <input type="submit" value="Guardar">
</form>

