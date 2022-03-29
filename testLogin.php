<?php
include_once "claseLogin.php";
$objLogin = new Login('pepe','eelcdpepe','de quien es la clave ? ');
echo $objLogin;

if ($objLogin->cambiarContrasenia('eelc2','de quien es la clave 2 ? '))
	echo "\n La contraseña se actualizo correctamente";
else 
	echo "\n No fue posible actualizar la contraseña";

if ($objLogin->cambiarContrasenia('eelc2','de quien es la clave 2 ? '))
	echo "\n La contraseña se actualizo correctamente";
else
	echo "\n No fue posible actualizar la contraseña";

if (!$objLogin->validarContraseña("cualquier pass "))
	echo "\n Error Login: La contraseña ingresada no coincide";

if ($objLogin->validarContraseña("eelc2"))
	echo "\n Login: La contraseña ingresada  coincide";

if( $objLogin->cambiarContrasenia('eelc3','de quien es la clave ? 3'))
	echo "\n La contraseña se actualizo correctamente";
else
	echo " \n No fue posible actualizar la contraseña";

if($objLogin->cambiarContrasenia('eelc4','de quien es la clave ? 4'))
	echo "\n La contraseña se actualizo correctamente";
else
	echo "\n No fue posible actualizar la contraseña";

echo $objLogin;

if($objLogin->cambiarContrasenia('eelc5','de quien es la clave ? 5'))
	echo " \n La contraseña se actualizo correctamente";
else
	echo "\n No fue posible actualizar la contraseña";

echo $objLogin;