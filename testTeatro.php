<?php
include "claseTeatro.php";

$funciones = [["nombre" => "marvel", "precio" => 600],["nombre" => "Pepe saca la mano de ahi carajo", "precio" => 200],["nombre" => "Quien nos conoce? ", "precio" => 160],["nombre" => "Vengan porfavor", "precio" => 16]];
$objTeatro = new Teatro("juan Teatro",$funciones,"Alberto 300",);
echo $objTeatro."\n";
$objTeatro->cambiarNombreTeatro("Ricardo Teatros");
echo $objTeatro."\n";
$objTeatro->cambiarDireccion("Av. Argentina las malvinas 1000");
echo $objTeatro."\n";
$objTeatro->cambiarNombreFuncion("marvel",0);
echo $objTeatro."\n";
$objTeatro->cambiarPrecioFuncion(350,1);
echo $objTeatro."\n";

?>