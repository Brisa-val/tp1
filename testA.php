<?php
include_once "claseA.php";
/*ppl  
int $numero1, $numero2, float $resultado*/
echo"imgrese un numero; \n";
$numero1=trim(fgets(STDIN));
echo"imgrese un numero; \n";
$numero2=trim(fgets(STDIN));

$resultado = new calculadora($numero1,$numero2);

echo "El resultado de la suma es :" .$resultado ->sumar() . "\n";
echo "El resultado de la resta es :" .$resultado ->restar() . "\n";
echo "El resultado de la  multiplicacion es :" .$resultado -> multiplicar() . "\n";
echo "El resultado de la division es :" .$resultado->dividir() . "\n";