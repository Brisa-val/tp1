<?php
include "claseCuentaBancaria.php";

$CuentaBancaria = new CuentaBancaria(01234,39447118,400001,45);
echo $CuentaBancaria."\n";
$CuentaBancaria->actualizarSaldo();
echo $CuentaBancaria."\n";
$CuentaBancaria->depositar(8000);
echo $CuentaBancaria."\n";
$transaccion = $CuentaBancaria->retirar(2000);
echo $transaccion."\n";
echo $CuentaBancaria."\n";
$transaccion = $CuentaBancaria->retirar(800000);
echo $transaccion."\n";
echo $CuentaBancaria."\n";

?>