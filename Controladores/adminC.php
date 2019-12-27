<?php

  class AdminC
  {
    public  function IngresoC()
    { //Si la variable POST en donde el valor sea usuarioIngreso viene con info
      if(isset($_POST['usuarioIngreso']))
      { //a usuario y clave le asignaremos lo que viene en el POST
        $datosC = array("usuario"=>$_POST["usuarioIngreso"], "clave"=>$_POST["claveIngreso"]);

        $tablaBD = "administradores";
        //Solicitamos una respuesta al modelo
        $respuesta = AdminM::IngresoM($datosC, $tablaBD);

        if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["clave"] == $_POST["claveIngreso"])
        {
          session_start();

          $_SESSION["Ingreso"] = true;

          header("location:index.php?ruta=herramientas");
        }
        else
        {
          echo "Error al ingresar";
        }
      }
    }
  }

 ?>
