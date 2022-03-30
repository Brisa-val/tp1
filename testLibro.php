<?php
include "claseLibro.php";

$objLibro = new Libro(5589,"marca de nacimiento",2016,"Escribiendo a 2 manos","luis","lorenzo");
echo $objLibro."\n";
$pertenece = $objLibro->perteneceEditorial("Escribiendo a 2 Manos");
if ($pertenece){
    echo "El libro pertenece a la editorial indicada."."\n";
}else{
    echo "El libro no pertenece a la editorial indicada."."\n";
}

$pertenece = $objLibro->perteneceEditorial("Escritura 123");
if ($pertenece){
    echo "El libro pertenece a la editorial indicada."."\n";
}else{
    echo "El libro no pertenece a la editorial indicada."."\n";
}

$libreria = ["Juan en el pais de las sombras larga","Pepe el Loco","Jamaica","Como vender criptomonedas",];
$buscarLibro = $objLibro->iguales("PepE el loco",$libreria);
if ($buscarLibro){
    echo "El libro esta en la libreria."."\n";
}else{
    echo "El libro no esta en la libreria."."\n";
}

$buscarLibro = $objLibro->iguales("Libraco",$libreria);
if ($buscarLibro){
    echo "El libro esta en la libreria."."\n";
}else{
    echo "El libro no esta en la libreria."."\n";
}

echo $objLibro->aniosEdicion()."\n";

$libreria2 = [["nombre" => "Pequeños guerreros","editorial" =>"Pepe Escritura"],["nombre" => "Jorge el Manos de manteca","editorial" =>"Escrituras 123"],["nombre" => "Pequeños invasores","editorial" =>"Pepe Escritura"],["nombre" => "Roberto el Escapista","editorial" =>"Pepe Escritura"],["nombre" => "Inseparables","editorial" =>"Escrituras 123"]];
$librosMismaEditorial = [];
$librosMismaEditorial = $objLibro->librodeEditoriales($libreria2, "pepe escritura");
print_r($librosMismaEditorial);

?>