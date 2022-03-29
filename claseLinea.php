<?php
class linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

   public function getPD(){
       return $this->pD;
   }
   public function getPC(){
       return $this->pC;
   }
   public function getPB(){
       return $this->pB;
   }
   public function getPA(){
       return $this->pA;
   }


   public function setPD($pD){
       $this->pD=$pD;
   }
   public function setPC($pC){
       $this->pC =$pC;
   }
   public function setPB($pB){
       $this->pB=$pB;
   }
   public function setPA($pA){
       $this->pA=$pA;
   }


   public function __construct($pA,$pB,$pC,$pD){
       $this ->pA =$pA;
       $this ->pB =$pB;
       $this ->pC =$pC;
       $this ->pD =$pD;

   }
    public function mueveDerecha($d)
    {
       $this->setPA($this->getPA() +$d);
       $this->setPC($this->getPC() +$d);
   }
    public function mueveIzquierda($d){
        $this->setPA($this->getPA() -$d);
        $this->setPC($this->getPC() -$d);
    
    }
    public function mueveArriba($d){
        $this->setPB($this->getPA() +$d);
        $this->setPD($this->getPC() +$d);
    }
    public function mueveAbajo($d){
        $this->setPB($this->getPA() -$d);
        $this->setPD($this->getPC() -$d);
    }
    public function __toString(){
    return ("punto A:"."(".$this->getPA().";".$this->getPB().")"."\n". 
            "punto B:"."(".$this->getPC().";".$this->getPD().")"."\n");
   }

}
?>