  <br>
  <h1>INGRESAR</h1>

  <form method="post" action="">
    <input type="text" placeholder="Usuario" name="usuarioIngreso" required>
    <input type="password" placeholder="Contraseña" name="claveIngreso" required>
    <input type="submit" value="Ingresar">
  </form>

<?php

  $ingreso = new AdminC();
  $ingreso -> IngresoC();

 ?>
