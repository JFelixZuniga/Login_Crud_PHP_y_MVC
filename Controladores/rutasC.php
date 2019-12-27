<?php

class RutasControlador{

  public function Plantilla()
  {
    include "Vistas/plantilla.php";
  }

  public function Rutas()
  {
    //Si la variable GET ruta viene con información, entonces...
    if(isset($_GET['ruta']))
    { //que la variable rutas sea igual a la variable GET ruta
      $rutas = $_GET['ruta'];
    }
    else
    {
      $rutas = "index";
    }
    //Acá solicitamos una respuesta al modelo, pero por fuera de la condición
    //Llamamos a la clase Modelo y la conectamos con una función mediante dos
    //dos punto, y recibe el parámetro rutas
    $respuesta = Modelo::RutasModelo($rutas);

    include $respuesta;
  }
}

?>
