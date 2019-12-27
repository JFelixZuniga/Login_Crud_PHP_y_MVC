<?php

  require_once "conexionBD.php";

  class AdminM extends ConexionBD
  {
    static public function IngresoM($datosC, $tablaBD)
    {
      $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");
      //Ahora enlazamos parámetros con bindParam, en que vincula una variable php
      $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

      $pdo -> execute();

      return $pdo -> fetch();

      $pdo -> close();

    }
  }

 ?>
