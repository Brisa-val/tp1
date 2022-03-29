<?php
include "claseLinea.php";

$objLinea=new linea (2,4,3,1);
echo $objLinea."\n";
$objLinea->mueveDerecha(2);
echo$objLinea."\n";
$objLinea->mueveAbajo(3);
echo$objLinea."\n";
$objLinea->mueveArriba(5);
echo $objLinea."\n";
$objLinea->mueveIzquierda(7);
echo $objLinea."\n";

?>