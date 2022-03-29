<?php
//definimos la clase
class Persona
{
    //atributos
private $nombre;
private $apellido;
private $documento;
//primer metodo --> metodo construc
public function __construct($nombre,$apellido,$documento,){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->documeto=$documento;
}
// 2do metodos de accesos get
public function getNombre(){
    return $this->nombre;
}
public function getApellido(){
    return $this->apellido;
}
public function getDocumento(){
    return $this->documento;
}
//metodos de acceso set
public function setNombre($nombre){
    $this->nombre=$nombre;
}
public function setApellido($apellido){
    $this->apellido=$apellido;
}
public function setDocumento($documento){
    $this->documento=$documento;
}
// este no se si es un metodo 
 public function _toString(){
     return "(".$this->getNombre().",".$this->getApellido().",".$this->getDocumento().")\n";
} 
}


