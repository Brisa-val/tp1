<?php

class Persona
{
    
  private $nombre;
  private $apellido;
  private $dni;

  public function __construct($n,$a,$d,){
      $this->nombre=$n;
      $this->apellido=$a;
      $this->dni=$d;
  }
  
  public function getNombre(){
      return $this->nombre;
  }
  public function getApellido(){
      return $this->apellido;
  }
  public function getDni(){
      return $this->dni;
  }
  
  public function setNombre($n){
      $this->nombre=$n;
  }
  public function setApellido($a){
      $this->apellido=$a;
  }
  public function setDni($d){
      $this->dni=$d;
  }
  // este no se si es un metodo 
   public function _toString(){
       return "(".$this->getNombre().",".$this->getApellido().",".$this->getDni().")\n";
  } 
  }

