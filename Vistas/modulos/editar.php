<?php

	session_start();
	if(!$_SESSION["Ingreso"])
	{
		header("location:index.php?ruta=ingreso");
		exit();
	}

 ?>

	<br>
	<h1>EDITAR HERRAMIENTAS</h1>

	<form method="post">

    <?php

      $editar = new HerramientasC();
      $editar -> EditarHerramientaC();

			$actualizar = new HerramientasC();
			$actualizar -> ActualizarHerramientaC();

    ?>

	</form>
