<?php

include "./Viaje.php";

$viaje = new Viaje();{
    newLine();{
        echo"============================================\n";
    }
    echo " Bienvenido a Viaje Feliz \n";
    newLine();

    echo "Menu: \n";
    newLine();
    echo "1 - Ver datos actuales del viaje. \n";
    echo "2 - Definir codigo del viaje. \n";
    echo "3 - Definir destino. \n";
    echo "4 - Definir Cantidad maxima de pasajeros \n";
    echo "5 - Agregar pasajero. \n";
    newLine();
 mostrarBienvenida();
 mostrarMenu();

 $opcion = trim(fgets(STDIN));

  switch($opcion)
  {
    case "1":
        $viaje->info();
        break;
    case "2":

        break;
    case "3":

        break;
    case "4":

        break;
    case "5":

        break;
    default:
        echo "la opcion elegida no es valida";
  }
}