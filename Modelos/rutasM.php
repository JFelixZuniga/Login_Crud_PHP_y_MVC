<?php

  class Modelo
  { //Es static porque lleva parámetros
    static public function RutasModelo($rutas)
    { //Si alguna de estas se cumple...
      if($rutas == "ingreso" || $rutas  == "registrar" || $rutas == "herramientas" || $rutas == "editar" || $rutas == "salir")
      { //...creamos una variable
        $pagina = "Vistas/modulos/".$rutas.".php"; //Concatenamos el nombre del archovo con .php :B
      } //si también
      elseif($rutas == "index")
      {
        $pagina = "Vistas/modulos/ingreso.php";
      } //si nada de esto se cumple...
      else
      {
        $pagina = "Vistas/modulos/ingreso.php";
      }
      return $pagina;
    }
  }

 ?>
