<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Administrador de Inventario</title>
  <!-- Tenemos que salir a la carpeta Vistas, puesto que es desde el index
       en donde estamos solicitando el css -->
	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

<?php

  include "modulos/menu.php"; //llamamos el NAV

 ?>

<section>
  <?php
    //Creamos el objeto rutas desde class RutasControlador
    $rutas = new RutasControlador();
    $rutas ->  Rutas();

   ?>
</section>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
