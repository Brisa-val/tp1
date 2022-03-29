<?php 
class cuadrado{
    private $vertice1;
    private $vertice2;
    private $vertice3;
    private $vertice4;

    public function getVertice1(){
        return $this->vertice1;
    }
    public function getVertice2(){
        return $this->vertice2;
    }
    public function getVertice3(){
        return $this-> vertice3;
    }
    public function getVertice4(){
        return $this-> vertice4;
    }

    public function setVertice1($vertice1,$index){
        $this->vertice1[$index]=$vertice1;
    }
    public function setVertice2($vertice2,$index){
        $this->vertice2[$index]=$vertice2;
    }
    public function setVertice3($vertice3,$index){
        $this->vertice3[$index]=$vertice3;
    }
    public function setVertice4($vertice4,$index){
        $this->vertice4[$index]=$vertice4;
    }
    
    public function __construct($vertice1,$vertice2,$vertice3,$vertice4){
        $this->vertice1=$vertice1;
        $this->vertice2=$vertice2;
        $this->vertice3=$vertice3;
        $this->vertice4=$vertice4;
    }
    public function area(){
        $lado=($this->getVertice2())["x"]-($this->getVertice1())["x"];
        $calucloArea= pow($lado,2);
        return $calucloArea;
    }
    public function desplazar($punto){
        $this->setVertice1(($this->getVertice1())["x"]+$punto["x"],"x");
        $this->setVertice1(($this->getVertice1())["y"]+$punto["y"],"y");
        $this->setVertice2(($this->getVertice2())["x"]+$punto["x"],"x");
        $this->setVertice2(($this->getVertice2())["y"]+$punto["y"],"y");
        $this->setVertice3(($this->getVertice3())["x"]+$punto["x"],"x");
        $this->setVertice3(($this->getVertice3())["Y"]+$punto["Y"],"Y");
        $this->setVertice4(($this->getVertice4())["x"]+$punto["x"],"x");
        $this->setVertice4(($this->getVertice4())["Y"]+$punto["Y"],"Y");
    }
    public function aumentarTamaño($tamaño){
        $this->setVertice1(($this->getVertice1())["x"]-$tamaño,"x");
        $this->setVertice1(($this->getVertice1())["y"]+$tamaño,"y");
        $this->setVertice2(($this->getVertice2())["x"]+$tamaño,"x");
        $this->setVertice2(($this-> getVertice2())["y"]+$tamaño,"y");
        $this->setVertice3(($this-> getVertice3())["x"]+$tamaño,"x");
        $this->setVertice3(($this-> getVertice3())["y"]-$tamaño,"y");
        $this->setVertice4(($this-> getVertice4())["x"]-$tamaño,"x");
        $this->setVertice4(($this-> getVertice4())["y"]-$tamaño,"y");
    }
    public function __toString()
    {
     return("vertice1:"."(".($this->getVertice1())["x"].";".($this->getVertice1())["y"].")"."\n".
     "vertice2:"."(".($this->getVertice2())["x"].";".($this->getVertice2())["y"].")"."\n".
     "vertice3:"."(".($this->getVertice3())["x"].";".($this->getVertice3())["y"].")"."\n".
     "vertice4:"."(".($this->getVertice4())["x"].";".($this->getVertice4())["y"].")"."\n");

    }

}
?>