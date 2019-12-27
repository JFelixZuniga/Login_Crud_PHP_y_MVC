<?php

  class ConexionBD
  {
    public function cBD()
    { //3 parámetros que se deben respetar para conectarse a la BBDD
      $bd = new PDO("mysql:host=localhost;dbname=crud", "root", "");
      return $bd;
    }
  }

 ?>
