<?php

  class HerramientasC
  //Registrar las herramientas
  {
    public function RegistrarHerramientasC()
    {
      if(isset($_POST["nombreRegistrar"]))
      {
        $datosC = array("nombre"=>$_POST["nombreRegistrar"], "marca"=>$_POST["marcaRegistrar"], "caracteristica"=>$_POST["caracRegistrar"], "disponibilidad"=>$_POST["disponibleRegistrar"], "cantidad"=>$_POST["cantidadRegistrar"]);

        $tablaBD = "herramientas";

        $respuesta = HerramientasM::RegistrarHerramientasM($datosC, $tablaBD);

        if($respuesta == "Bien")
        {
          header("location:index.php?ruta=herramientas");
        }
        else
        {
          echo "error";
        }
      }
    }

    //Mostrar las herramientas
    public function MostrarHerramientasC()
    {
      $tablaBD = "herramientas";

      $respuesta = HerramientasM::MostrarHerramientasM($tablaBD);

      foreach ($respuesta as $key => $value)
      {
        //en este echo va la tabla
        echo '<tr>
        				<td>'.$value["nombre"].'</td>
        				<td>'.$value["marca"].'</td>
        				<td>'.$value["caracteristica"].'</td>
        				<td>'.$value["disponibilidad"].'</td>
        				<td>'.$value["cantidad"].'</td>

                <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button>Editar</button></a></td>

                <td><a href="index.php?ruta=herramientas&idBorrar='.$value["id"].'"><button>Borrar</button></a></td>
        			</tr>';
      }
    }

    //Editar herramienta
    public function EditarHerramientaC()
    {
      $datosC = $_GET["id"];

      $tablaBD = "herramientas";

      $respuesta = HerramientasM::EditarHerramientaM($datosC, $tablaBD);

      echo '<input type="hidden" value="'.$respuesta["id"].'" name="idEditar">

            <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

        		<input type="text" placeholder="Marca" value="'.$respuesta["marca"].'" name="marcaEditar" required>

        		<input type="text" placeholder="Característica" value="'.$respuesta["caracteristica"].'" name="caracEditar" required>

        		<input type="text" placeholder="Disponibilidad" value="'.$respuesta["disponibilidad"].'" name="disponibilidadEditar" required>

        		<input type="text" placeholder="Cantidad" value="'.$respuesta["cantidad"].'" name="cantidadEditar" required>

        		<input type="submit" value="Actualizar">';
    }

    //Actualizar herramienta
    public function ActualizarHerramientaC()
    {
      if(isset($_POST["nombreEditar"]))
      {
        $datosC = array("id"=>$_POST["idEditar"], "nombre"=>$_POST["nombreEditar"], "marca"=>$_POST["marcaEditar"], "caracteristica"=>$_POST["caracEditar"], "disponibilidad"=>$_POST["disponibilidadEditar"], "cantidad"=>$_POST["cantidadEditar"]);

        $tablaBD = "herramientas";

        $respuesta = HerramientasM::ActualizarHerramientaM($datosC, $tablaBD);
        //Si se actualiza bien en la BBDD nos volverá a recargar la página de herramientas
        if($respuesta == "Bien")
        {
          header("location:index.php?ruta=herramientas");
        }
        else
        {
          echo "error";
        }
      }
    }
      //Eliminar herramienta
    public function BorrarHerramientaC()
    {
      if(isset($_GET["idBorrar"]))
      {
        $datosC = $_GET["idBorrar"];

        $tablaBD = "herramientas";

        $respuesta = HerramientasM::BorrarHerramientaM($datosC, $tablaBD);

        if($respuesta == "Bien")
        {
          header("location:index.php?ruta=herramientas");
        }
        else
        {
        echo "error";
        }
      }
    }
  }
?>
