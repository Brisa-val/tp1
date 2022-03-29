<?php
include_once "claseCalculadora.php";

$objCaluladora= new calculadora(10,20);
$sumaPrueba=$objCaluladora->sumar();
$restaPrueba=$objCaluladora->restar();
$divPrueba= $objCaluladora->dividir();
$multiPrueba=$objCaluladora->multiplicar();

echo "La suma es".$sumaPrueba."\n";
echo "La resta es".$restaPrueba."\n";
echo "La division es".$divPrueba."\n";
echo "La multiplicacion es".$multPrueba."\n";
echo $objCaluladora."\n"."\n";

?>