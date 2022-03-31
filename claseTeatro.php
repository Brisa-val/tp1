<?php
class Teatro{
    private $nombreTeatro;
    private $direccion;
    private $funcion;

    
    public function getNombreTeatro(){
        return $this->nombreteatro;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getFuncion(){
        return $this->funcion;
    }

    public function setFuncion($valor){
        $this->funcion = $valor;
    }
    public function setNombreTeatro($nombreTeatro){
        $this->nombreTeatro = $nombreTeatro;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function __construct($nombreTeatro,$funcion,$direccion){
        $this->nombreTeatro = $nombreTeatro;
        $this->funcion = $funcion;
        $this->direccion = $direccion;
    }

    public function cambiarNombreTeatro($nombre){
       $this->setNombreTeatro($nombre);
    }

    public function cambiarDireccion($direccion){
       $this->setDireccion($direccion);
    }

    public function cambiarNombreFuncion($nombre,$numFuncion){
       $this->setFuncion($nombre,$numFuncion,"nombre");
    }
    public function cambiarPrecioFuncion($precio,$numFuncion){
        $this->setFuncion($precio,$numFuncion,"precio");
     }


    public function __toString(){
        return ("El nombre del teatro es: ".$this->getNombreTeatro()."\n".
                 "El nombre de la funcion es 1: ".$this->getFuncion(0,"nombre")." y el precio: ".$this->getFuncion(0,"precio")."\n".
                 "El nombre de la funcion es 2: ".$this->getFuncion(1,"nombre")." y el precio: ".$this->getFuncion(1,"precio")."\n".
                 "El nombre de la funcion es 3: ".$this->getFuncion(2,"nombre")." y el precio: ".$this->getFuncion(2,"precio")."\n".
                 "El nombre de la funcion es 4: ".$this->getFuncion(3,"nombre")." y el precio: ".$this->getFuncion(3,"precio")."\n".
                 "La direccion del teatro es: ".$this->getDireccion()."\n");
    }

    

    
}

?>













?>
