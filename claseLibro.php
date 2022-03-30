<?php
class Libro{
    private $isbn;
    private $titulo;
    private $añoEdicion;
    private $editorial;
    private $nombre;
    private $apellido;


    public function getIsbn(){
        return $this->isbn;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAñoEdicion(){ 
        return $this->añoEdicion;
    }

    public function getEditorial(){
        return $this->editorial;
    } 
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }


    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }
    public function setAñoEdicion($añoEdicion){
        $this->añoEdicion = $añoEdicion;

        return $this;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }

    public function __construct($isbn,$titulo,$añoEdicion,$editorial,$nombre,$apellido){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->añoEdicion = $añoEdicion;
        $this->editorial = $editorial;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function perteneceEditorial($peDitorial){
        $verificacion = strtoupper($peDitorial) == strtoupper($this->getEditorial());
        return $verificacion;
    }

    public function iguales($pLibro, $pArreglo){
        $bandera = true;
        $existe = true;
        $i = 0;
        $dimension = count($pArreglo);
        while($bandera && $dimension > $i){
            if(strtoupper($pArreglo[$i]) == strtoupper($pLibro)){
                $existe = true;
                $bandera = false;
            }else{
                $existe = false;
            }
            $i++;
        }
        return $existe;
    } 

    public function aniosEdicion(){
        return date("Y") - $this->getAñoEdicion();
    } 

    public function libroDeEditoriales($arregloAutor, $pEditorial){
        $arregloEditorial = [];
        $i = 0;
        foreach($arregloAutor as $index){
            foreach($index as $valor => $dato){
            if($valor == "editorial"){
                if(strtoupper($dato) == strtoupper($pEditorial)){
                array_push($arregloEditorial, $arregloAutor[$i]["nombre"]);
                }
                }
            }
            $i++;
        }
        return $arregloEditorial;
    }

    public function __toString(){
        return ("El ISBN es :".$this->getIsbn()."\n".
        "El titulo es :".$this->getTitulo()."\n".
        "El año de edicion es :".$this->getAñoEdicion()."\n".
        "La editorial es :".$this->getEditorial()."\n".
        "El nombre es :".$this->getNombre()."\n".
        "El apellido es :".$this->getApellido()."\n");
    } 


}

?>