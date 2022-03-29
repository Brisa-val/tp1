<?php
class calculadora
{
    private $numero1;
    private $numero2;

    public function __construct($numero1,$numero2)
    {
       $this->numero1=$numero1;
       $this->numero2=$numero2;
    }
    public function getNumero1()
    {
        return $this->numero1;
    }
    public function getNumero2()
    {
        return $this->numero2;
    }
    public function setNumero1($numero1)
    {
        $this->num1 = $numero1;
    }
    public function setNumero2($numero2)
    {
        $this->numero2 = $numero2;
    }

    public function sumar()
    {
        $suma = $this->getNumero1() + $this->getNumero2();
        return $suma;
    }

    public function restar(){
        $resta = $this->getNumero1() - $this->getNumero2();
        return $resta;
    }

    public function multiplicar(){
        $multiplicacion = $this->getNumero1() * $this->getNumero2();
        return $multiplicacion;
    }

    public function dividir(){
        $dividir = $this->getNumero1() / $this->getNumero2();
        return $dividir;
    }
    public function __toString(){
        return "(".$this->getNumero1(). ",".$this->getNumero2(). ")";
    }
}
