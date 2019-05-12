<?php
namespace core;
// Esta clase ejecuta las sentencias contra la base de datos... 
// En teoria no se puede ejecutar desde otro lado que no sea usando el ejecutro
use core\Conexion;

class Ejecutor extends Conexion {

  private $ctr; // Private para ayudar a la seguridad.

  // Instanciamos el metodo que contiene la conexion en el padre
  function __construct(){
    $this->ctr = parent::obj_db();
  }

  // retorna la ejecucion de la sentencia
  public function ejecutar($sql){
    
		return array($this->ctr->query($sql));
    // Vuelve nula la variable ctr
    $this->ctr = NULL;
  }
  public function hacerRetornaId($sql){
    $this->ctr->query($sql);
    return $this->ctr->lastInsertId();

    // Vuelve nula la variable ctr
    $this->ctr = NULL;

  }
}
