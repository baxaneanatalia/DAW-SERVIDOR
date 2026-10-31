<?php //definimos las variables que vamos a utilizar en la vista
$name = "Carla"; 
$apellido = "Lopez";
$edad = 30;
$saldo = 1000.50;
$date = date("d/m/Y");

include __DIR__ . '/vista.php'; //incluimos el archivo vista.php para poder utilizar la función mostrarVista()
?>