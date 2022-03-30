<?php
class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;


    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }


    public function setCantidadActual($cantidadActual){
        $this->cantidadActual = $cantidadActual;

    }
    public function setCapacidadMaxima($capacidadMaxima){
        $this->capacidadMaxima = $capacidadMaxima;
    }

    public function __construct($cantidadActual, $cantidadMaxima){
        $this->cantidadActual = $cantidadActual;
        $this->capacidadMaxima = $cantidadMaxima;
    }

    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMaxima());
    }

    public function servirTaza($cantidad){
        if($this->getCantidadActual() < $cantidad){
            $mensaje = true;
            $this->setCantidadActual(0);
        }else{
            $mensaje = false;
            $this->setCantidadActual($this->getCantidadActual() - $cantidad);
        }
        return $mensaje;
    }

    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }

    public function agregarCafe($cantidad){
        if($cantidad <= $this->getCapacidadMaxima()){
            $this->setCantidadActual($this->getCantidadActual() + $cantidad);
            $verificacion = true;
        }else{
            $verificacion = false;
        }
        return $verificacion;
    }

    public function __toString(){
        return "La cantidad actual de la cafetera es: ".$this->getCantidadActual()."\n".
                "La cantidad Maxima de la cafetera es: ".$this->getCapacidadMaxima();
    }

}


?>