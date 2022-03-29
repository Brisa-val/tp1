<?php
include "clasePersona.php";

$Test_Persona = new persona("juan","luck","368133384915103");

echo "su nombre es:".$Test_Persona->getNombre()."\n";
echo "su apellido es:".$Test_Persona->getApellido()."\n";
echo "su documento es:".$Test_Persona->getDocumento()."\n";



$Test = new persona("juasdck","lusdsdck","368133384915103");

echo "su nombre es:".$Test->getNombre()."\n";
echo "su apellido es:".$Test->getApellido()."\n";
echo "su documento es:".$Test->getDocumento()."\n";
?>