<?php
class Teatro{

/*15. Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día. Cada función tiene
un nombre y un precio. Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase,
teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de un función y el
precio. Implementar las 4 funciones usando array de array asociativo. Cada función es un array asociativo con
las claves “nombre” y “precio”.*/


private $nombreTeatro;
private $direccion;
private $funciones;

//public function __construct($nombreTeatro,$direccion,$funcion0,$funcion1,$funcion2,$funcion3){
public function __construct($nombreTeatro,$direccion,$funciones){
	$this->nombreTeatro=$nombreTeatro;
	$this->direccion=$direccion;
	$this->funciones = $funciones;
	}

public function setnombreTeatro($nombreTeatro) {
	$this->nombreTeatro = $nombreTeatro;
	}

public function setdireccion($direccion){
	$this->direccion = $direccion;
	}


//public function setfunciones($funcion0, $funcion1, $funcion2, $funcion3) {
public function setfunciones($funciones){
	// Método que modifica el atributo $funciones
	$this->funciones = $funciones;
	//$this->funciones[1] = $funcion1;
	//$this->funciones[2] = $funcion2;
	//$this->funciones[3] = $funcion3;
}
/*
public function setfuncion($funcion, $pos) {
	// Método propio que modifica una función según la posición en la funciones
	// $funcion es arreglo asociativo ("nombre" y "precio"), y $pos es entero
	$this->funciones[$pos] = $funcion;
}
*/


public function getnombreTeatro() {
	return $this->nombreTeatro;
	}
public function getdireccion() {
	return $this->direccion;
	}
public function getfunciones() {
	// Método que retorna el estado completo de $funciones
	return $this->funciones;
}
/*
public function getfuncion($pos) {
	// Método propio que retorna el estado de una función, 
	// según la posición indicada en $pos (int)
	return $this->funciones[$pos];
}
*/



    private function armarCadenaArrayFunciones (){
        $aFunciones= $this->getfunciones();
        $cFunciones= "";
        for ($i=0;$i<count($aFunciones); $i++){
            $nroFuncion=$i+1; 
            $cFunciones= $cFunciones. " ".$nroFuncion. 
                " Nombre: ". $aFunciones[$i]->getnombre().
                " - Precio:". $aFunciones[$i]->getprecio().
                " - Hora de función:". $aFunciones[$i]->gethorario_de_inicio()["hs"].":".$aFunciones[$i]->gethorario_de_inicio()["min"].
                " - Duración:". $aFunciones[$i]->getduracion()."\n"; 
                //"- Precio: $".$aFunciones[$i]["precio"]."\n";
              
        }
            
        return $cFunciones;
    }








public function __toString() {
	// Convierte todo el estado del objeto en un String que se pueda mostrar por pantalla
	return "Nombre del teatro: ".$this->getnombreTeatro()."\n"
    ."Dirección: ".$this->getDireccion()."\n"
    ."\n Funciones: \n".$this->armarCadenaArrayFunciones();	
		
		/*
		."Funciones: \n"//.$this->getfunciones()."\n"
		."1° función: ".$this->getfunciones(0)["nombre"]." - Costo $".$this->getFunciones(0)["precio"]." - Horario de inicio ".$this->getFunciones(0)["horario_de_duracion"]." - Duración ".$this->getFunciones(0)["duracion"]."\n"
		."2° función: ".$this->getfunciones(1)["nombre"]." - Costo $".$this->getFunciones(1)["precio"]." - Horario de inicio ".$this->getFunciones(1)["horario_de_duracion"]." - Duración ".$this->getFunciones(1)["duracion"]."\n"
		."3° función: ".$this->getfunciones(2)["nombre"]." - Costo $".$this->getFunciones(2)["precio"]." - Horario de inicio ".$this->getFunciones(2)["horario_de_duracion"]." - Duración ".$this->getFunciones(2)["duracion"]."\n"
		."4° función: ".$this->getfunciones(3)["nombre"]." - Costo $".$this->getFunciones(3)["precio"]." - Horario de inicio ".$this->getFunciones(3)["horario_de_duracion"]." - Duración ".$this->getFunciones(3)["duracion"]."\n";	
*/
}


public function cambiarNombreTeatro($p){

	$this->setnombreTeatro($p);
	
	}

public function cambiarDireccion($p){

	$this->setdireccion($p);
	
	}

/*Volver a implementar las
operaciones que permiten modificar el nombre y el precio de una función*/

    public function modificar_NombrePrecioFuncion($nombrefuncion,$nombreNuevo,$precioNuevo){
        $aFunciones= $this->getfunciones();
        $cFunciones= false;
        for ($i=0;$i<count($aFunciones); $i++){
			$bFunciones=$aFunciones[$i];
			if($bFunciones->getnombre()==$nombrefuncion){
            
                $bFunciones->setnombre($nombreNuevo);
                $bFunciones->setprecio($precioNuevo);
				//$this->setfunciones($bfunciones);
				$cFunciones=true;
				 
             }
           
        }
            
        return $cFunciones;
    }




/*Luego implementar la operación que
carga las funciones en un teatro especifico, solicitando por consola la información de las mismas*/

public function incorporarFunciones($arreglo){
	//$funcionessinactual=$this->getfunciones();
	//$valor=array_push($funcionessinactual,$arreglo);
	$this->setfunciones($arreglo);
	}















/*



public function modificar_NombrePrecioFuncionconId($nombreFuncion,$nombreNuevo,$precioNuevo){
       $arreglo=$this->getfunciones();
       $i=0;
       $res=false;
       while ($i<count($arreglo) && !$res) {
           $funciones=$arreglo[$i];
           if ($funciones[$i]->getnombre()==$nombreFuncion) {
               $funciones[$i]->setnombre($nombreNuevo);
               $funciones[$i]->setPrecio($precioNuevo);
             //  $this->set_Cambiar_funciones($funciones);
               $res=true;
           }
           
           $i++;
       }



    public function modificar_NombrePrecioFuncionconId($nroFuncion,$nombreNuevo,$precioNuevo){
        $eltosArreglo = $this-> getfunciones();
        $bandera = false;
        
         for ($i=0;$i<count($aFunciones); $i++){
			 if ($nroFuncion>=0 && $nroFuncion <count($eltosArreglo)){
				$eltosArreglo[$i]->setnombre($nombreNuevo);
				$eltosArreglo[$i]->setprecio($precioNuevo);
			}
        }
        
        if ($nroFuncion>=0 && $nroFuncion <count($eltosArreglo)){
            $unaFuncion = $eltosArreglo[$nroFuncion];
            $unaFuncion["nombre"]=$nombreNuevo;
	        $unaFuncion["precio"]=$precioNuevo;
	        $eltosArreglo[$nroFuncion] = $unaFuncion;
	        $bandera = true;
       }
       
       
       $this ->setfunciones($eltosArreglo);
       return $bandera;
       
    */
}













?>
