<?php
class cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function getCantidadActual(){
        return $this->capacidadActual;
    }
    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }


    public function setCantidadActual($cantidadActual){
        $this->cantidadActual=$cantidadActual;
    }
    public function setCapacidadMaxima($capacidadMaxima){
        $this->capacidadMaxima = $capacidadMaxima;
    }
    public function __construct($cantidadActual,$cantidadMaxima){
        $this->cantidadActual=$cantidadActual;
        $this->capacidadMaxima=$cantidadMaxima;
    }
    public function llenarCafetera(){
        $this->setCantidadActual($this-> getCapacidadMaxima());
    }
    public function servirTaza($cantidad){
        if ($this->getCantidadActual()<$cantidad){
            $mensaje="solamente se pudo llenar".$this->getCantidadActual()."me de la taza ya que falta cafe:(";
            $this->setCantidadActual(0);
            }else{
                $mensaje="la taza se ha llenado:)";
                $this->setCantidadActual($this->getCantidadActual()-$cantidad);
            }
            return $mensaje;
    }
    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }
    public function agregarCafe($cantidad){
        if($cantidad < $this->getCapacidadMaxima()){
            $this-> setCantidadActual($this->getCantidadActual() +$cantidad);
            $varificacion=true;
        }else{
            $verificacion=false;
        }
        return $verificacion;
    }
    public function __toString()
    {
        return"la cantidad actual de la cafetera es:".$this->getCantidadActual()."\n".
        "la cantidad maxima de la cafetera es:".$this->getCapacidadMaxima();
    }
}
?>