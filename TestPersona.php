<?php
include "clasePersona.php";

$Test_Persona = new persona("cris","lucas",440410040);

echo "su nombre es:".$Test_Persona->getNombre()."\n";
echo "su apellido es:".$Test_Persona->getApellido()."\n";
echo "su dni es:".$Test_Persona->getDni()."\n";


$Test = new persona("crigss","luckikis",34034034975);

echo "su nombre es:".$Test->getNombre()."\n";
echo "su apellido es:".$Test->getApellido()."\n";
echo "su dni es:".$Test->getDni()."\n";
?>