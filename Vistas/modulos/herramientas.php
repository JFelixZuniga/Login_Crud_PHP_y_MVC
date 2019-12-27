<?php

	session_start();
	if(!$_SESSION["Ingreso"])
	{
		header("location:index.php?ruta=ingreso");
		exit();
	}

 ?>


	<br>
	<h1>Herramientas</h1>

	<table id="t1" border="1">

		<thead>

			<tr>
				<th>Nombre</th>
				<th>Marca|</th>
				<th>Características</th>
				<th>Disponibilidad</th>
				<th>Cantidad</th>
				<th></th>
				<th></th>
			</tr>

		</thead>

		<tbody>

			<?php

			$mostrar = new HerramientasC();
			$mostrar -> MostrarHerramientasC();

			?>

		</tbody>

	</table>

	<?php

		$eliminar = new HerramientasC();
		$eliminar -> BorrarHerramientaC();

	 ?>
