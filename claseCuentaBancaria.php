<?php
class CuentaBancaria{
    private $numCuenta;
    private $DNI;
    private $saldoActual;
    private $interesAnual;
 

    public function getNumCuenta(){
        return $this->numCuenta;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }

    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setSaldoActual($saldoActual){
        $this->saldoActual = $saldoActual;
    }
    public function setInteresAnual($interesAnual){
        $this->interesAnual = $interesAnual;
    }
    public function setDNI($DNI){
        $this->DNI = $DNI;
    }
    
    
    public function setNumCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }
    public function __construct($numCuenta,$DNI,$saldoActual,$interesAnual){
        $this->numCuenta = $numCuenta;
        $this->DNI = $DNI;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }

    public function actualizarSaldo(){
        $this->setSaldoActual(($this->getInteresAnual() / 365) + $this->getSaldoActual());
    }

    public function depositar($cant){
        $this->SetSaldoActual($cant + $this->getSaldoActual());
    }

    public function retirar($cant){
        if($this->getSaldoActual() > $cant){
            $this->SetSaldoActual($this->getSaldoActual() -$cant);
            $verificacion = "El dinero se ha retirado satisfactoriamente.";
        }else{
            $verificacion = "No hay saldo suficiente.";
        }
        return $verificacion;
    }

    public function __toString(){
        return ("El numero de la cuenta es: ".$this->getSaldoActual()."\n".
                "El DNI de la cuenta es: ".$this->getDNI()."\n".
                "El saldo actual de la cuenta es: ".$this->getSaldoActual()."\n".
                "El interes anual de la cuenta es: ".$this->getInteresAnual()."\n");
    }
}
?>