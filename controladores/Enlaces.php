<?php
namespace controladores;

class Enlaces{

  public static function enlacesControlador(){

    if(isset($_GET["action"])){

      $enlaces = $_GET["action"];
    
    } else {

      $enlaces = "index";

    }

    $respuesta = new \modelos\Enlaces();
    include $respuesta -> enlacesModelo($enlaces);
    
  }
}