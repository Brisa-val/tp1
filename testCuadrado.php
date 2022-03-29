<?php
include "claseCuadrado.php";
$vertice1 =["x" => 0, "y"=> 5];
$vertice2 =["x" => 5, "y"=> 5];
$vertice3 =["x" => 5, "y"=> 0];
$vertice4 =["x" => 0, "y"=> 0];
$objCuadrado=new cuadrado($vertice1,$vertice2,$vertice3,$vertice4);
echo $objCuadrado."\n";
echo "el area es:".$objCuadrado->area()."\n"."\n";
$desplazarCuadrado =["x"=> 5,"y" => 1];
$objCuadrado->desplazar($desplazarCuadrado);
echo $objCuadrado."\n";
$objCuadrado->aumentarTamaño(1);
echo $objCuadrado."\n";