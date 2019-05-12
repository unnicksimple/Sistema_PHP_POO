<?php
namespace core;

class auxiliar{

  protected function cargaArreglo($pregunta){
    
    $pregunta = $this->ejecuta->hacer($pregunta); // Metodo que esta en el core
    // Creamos un arrayIterator
    $this->arreglo = new \ArrayIterator();
    // El ciclo carga en el arrayIterator lo obtenido en la base de datos
    while ($registro = $pregunta[0]->fetch(\PDO::FETCH_ASSOC)) {

      $this->arreglo->append($registro); // append() añade datos a un arreglo

    }

    return $this->arreglo;

  }// fin cargaArreglo
}