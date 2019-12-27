<?php

  require_once "conexionBD.php";

  class HerramientasM extends ConexionBD
  {
    //Registrar las herramientas
    static public function RegistrarHerramientasM($datosC, $tablaBD)
    {
      $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, marca, caracteristica, disponibilidad, cantidad) VALUES (:nombre, :marca, :caracteristica, :disponibilidad, :cantidad)");

      $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
      $pdo -> bindParam(":marca", $datosC["marca"], PDO::PARAM_STR);
      $pdo -> bindParam(":caracteristica", $datosC["caracteristica"], PDO::PARAM_STR);
      $pdo -> bindParam(":disponibilidad", $datosC["disponibilidad"], PDO::PARAM_STR);
      $pdo -> bindParam(":cantidad", $datosC["cantidad"], PDO::PARAM_STR);

      if($pdo -> execute())
      {
        return "Bien";
      }
      else
      {
        return "Error";
      }
      $pdo -> close();
    }

    //Mostrar las herramientas
    static public function MostrarHerramientasM($tablaBD)
    {
      $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, marca, caracteristica, disponibilidad, cantidad FROM $tablaBD");

      $pdo -> execute();
      //usamos fetchAll porque devolveremos una fila o todas las que hayan
      return $pdo->fetchAll();

      $pdo -> close();
    }

    //Editar herramienta
    static public function EditarHerramientaM($datosC, $tablaBD)
    {
      $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, marca, caracteristica, disponibilidad, cantidad FROM $tablaBD WHERE id = :id");

      $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

      $pdo -> execute();

      return $pdo->fetch();

      $pdo -> close();
    }

    //Actualizar herramientas
    static public function ActualizarHerramientaM($datosC, $tablaBD)
    {
      $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, marca = :marca, caracteristica = :caracteristica, disponibilidad = :disponibilidad, cantidad = :cantidad WHERE id = :id");

      $pdo ->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
      $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
      $pdo -> bindParam(":marca", $datosC["marca"], PDO::PARAM_STR);
      $pdo -> bindParam(":caracteristica", $datosC["caracteristica"], PDO::PARAM_STR);
      $pdo -> bindParam(":disponibilidad", $datosC["disponibilidad"], PDO::PARAM_STR);
      $pdo -> bindParam(":cantidad", $datosC["cantidad"], PDO::PARAM_STR);

      if($pdo -> execute())
      {
        return "Bien";
      }
      else
      {
        return "Error";
      }
      $pdo -> close();
    }

    //Borrar herramienta
    static public function BorrarHerramientaM($datosC, $tablaBD)
    {
      $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

      $pdo ->bindParam(":id", $datosC, PDO::PARAM_INT);

      if($pdo -> execute())
      {
        return "Bien";
      }
      else
      {
        return "Error";
      }
      $pdo -> close();
    }
  }

?>
