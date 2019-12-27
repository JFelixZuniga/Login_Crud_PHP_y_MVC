<?php

	session_start();
	if(!$_SESSION["Ingreso"])
	{
		header("location:index.php?ruta=ingreso");
		exit();
	}

 ?>

	<br>
	<h1>REGISTRAR HERRAMIENTA</h1>

	<form method="post">

		<input type="text" placeholder="Nombre" name="nombreRegistrar" required>

		<input type="text" placeholder="Marca" name="marcaRegistrar" required>

		<input type="text" placeholder="Característica" name="caracRegistrar" required>

		<input type="text" placeholder="Disponibilidad" name="disponibleRegistrar" required>

		<input type="text" placeholder="Cantidad" name="cantidadRegistrar" required>

		<input type="submit" value="Registrar">

	</form>

<?php

	$registrar = new HerramientasC();
	$registrar -> RegistrarHerramientasC();

?>
