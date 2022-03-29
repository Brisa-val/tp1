<?php
class Login{
	private $nombreUsuario;
	private $contrasenia;
	private $frase_pass;
	private $ultimas_4pass;
	
	public function __construct($usu,$pass,$frase){
		$this->nombreUsuario =$usu;
		$this->contrasenia=$pass;
		$this->frase_pass=$frase;
		$this->ultimas_4pass= array();
		array_push($this->ultimas_4pass,$pass);
		
	}
	
	public function  setContrasenia($param){
		$this->contrasenia=$param;
		
	}
	public function getContrasenia(){
		return $this->contrasenia;
	}
	
	public function getUltimas_4pass(){
		return  $this->ultimas_4pass;
	}
	public function getNombreUsuario(){
		return $this->nombreUsuario;
	}
	public function getFrase_pass(){
		return $this->frase_pass;
	}
	
	public function setUltimas_4pass($param){
		$this->ultimas_4pass=$param;
	}
	
	public function setFrase_passs($param){
		$this->frase_pass=$param;
	}
	
	public function validarContraseña($pass){
		$resp = false;
		if (strcmp($pass , $this->getContrasenia())==0)
			$resp=true;
		return $resp;
	}
	
	private function actualizarArregloPass($pass){
		$arregloPass =$this->getUltimas_4pass();
		if (count($arregloPass)==4){
			array_shift($arregloPass); // quitamos el primer elemento
		}
		array_push($arregloPass,$pass);// en la ultima posicion del arreglo
		$this->setUltimas_4pass($arregloPass);
		
		
	}
	
	public function cambiarContrasenia($pass_nueva,$frase_nueva){
		$resp=false;
		$esta=false;
		$i=0;
		$arregloPass=$this->getUltimas_4pass();
		while (!$esta and $i<count($arregloPass)){
			if (strcmp($arregloPass[$i],$pass_nueva)==0){
				$esta =true;
				//echo "\n son iguales ".$arregloPass[$i]. " con ".$pass_nueva;
			}
		$i++;
		}
		if (! $esta){
			echo "modificar pass";
			$this->setContrasenia($pass_nueva);
			$this->setFrase_passs($frase_nueva);
			$this->actualizarArregloPass($pass_nueva);
			$resp=true;
		}
		
		return $resp;
	}
/*	public function __toString(){
		
		$cadena = "usuario:". $this->getNombreUsuario() ."\n".
				" pass:".$this->getContrasenia() ."\n".
				" frase:".$this->getFrase_pass() ."\n";
		$arregloPass=$this->getUltimas_4pass();
		for ($i=0;$i<count($arregloPass);$i++  ){
				$cadena.="pass ".$i." : ".$arregloPass[$i]."\n";
		}
		return $cadena;
	}*/
}