<?php
namespace db;

class Conexion{
  
  public $con = NULL;
  protected function obj_db(){
    // Poner en forma externa la conexion de base de datos.
    $driver = "mysql";
    $servername = "localhost";
    $username = "nombreDUsuario";
    $password = "clave";
    $charset= "SET NAMES utf8";
    $dbname = "nombreBaseDDatos";
    
    try { 
      $this->con = new \PDO("$driver:host=$servername;dbname=$dbname;$charset", $username, $password);
      // set the PDO error mode to exception 
        $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        return $this->con;
        
      }catch(PDOException $e){
        echo "Tienes un error en => " . $e->getMessage(); 
      } 
    }
  }