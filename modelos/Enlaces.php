<?php
namespace modelos;

class Enlaces{
  //$enclace  viene cargado desde el controlador con lo que se le paso por $_GET
  public function enlacesModelo($enlaces){
    //Creamos una lista blanca de los link que se pueden ingresar dentro de la URL
    if( $enlaces == "inicio" ){

      $modulo = "./vistas/modulos/{$enlaces}.php";

    } else if( $enlaces == "index"){

      $modulo = "./vistas/modulos/login.php";
    } else {
      
      $modulo = "./vistas/modulos/login.php";
    }

    return $modulo;
  }
}