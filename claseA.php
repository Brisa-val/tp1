<?php
/*Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, / */
 
class Calculadora{
    private $operacion;
 
    public function __construct($operacion){
        $this->operacion = $operacion;
    }
 
    public function getOperacion(){
        return $this->operacion;
    }
    public function setOppercion($operacion){
        $this->operacion = $operacion;
    }
   
    public function calculos($nro1, $nro2){
        $calculo = $this->getOperacion();
       
        if($calculo == "suma"){
            $resultado = $nro1+$nro2;
        }
        elseif($calculo == "resta"){
            $resultado = $nro1-$nro2;
        }
        elseif($calculo == "multiplicacion"){
            $resultado = $nro1*$nro2;
        }
        elseif($calculo == "division"){
            $resultado = $nro1/$nro2;
        }
        else {
            $resultado = "error no existe esa operacion!!";
        }
        return $resultado;
    }
 
    public function __toString(){
        return "operacion".$this->getOperacion();
    }
 
 
}
