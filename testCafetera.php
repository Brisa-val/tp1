<?php
include "claseCafetera.php";

$obCafetera=new cafetera(500,1000);
echo $objCafetera."\n"."\n";
$objCafetera->llenarCafetera();
echo $objCafetera."\n"."\n";
$comprobacion=$objCafetera->servirTaza(400);
echo $comprobacion."\n";
echo $objCafetera."\n"."\n";
$comprobacion=$objCafetera->servirTaza(700);
echo $comprobacion."\n";
echo $obCafetera."\n"."\n";
$operacionRealizada=$objCafetera->$agregarCafe(500);
if ($operacionRealizada){
    echo "se lleno la cafetera de forma exitosa"."\n"."\n";
}else{
    echo "no se pudo llenar la cafetera ya que la cantidad que soporta es menor a la agregada"."\n"."\n";
}
$operacionRealizada=$obCafetera->agregarCafe(5000);
if($operacionRealizada){
    echo"se lleno la cafetera de forma exitosa"."\n"."\n";
}else{
    echo" no se pudo llenar la cafetera ya que la cantidad que soporta es menor a la agregada"."\n"."\n";
}
echo $objCafetera."\n"."\n";
$objCafetera->vaciarCafetera();
echo $objCafetera."\n"."\n"
?>