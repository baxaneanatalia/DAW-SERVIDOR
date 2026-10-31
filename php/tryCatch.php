<?php

try { //iniciamos un bloque try para capturar cualquier excepción que pueda ocurrir

$edad= 5;

if($edad < 18){//si la edad es menor a 18 años, lanzamos una excepción con un mensaje de error
    throw new Exception("Debes ser mayor de edad para acceder a esta página");
}
echo "Bienvenido a la página";

} catch(Exception $e){//capturamos la excepción y mostramos el mensaje de error
    echo "Error: " . $e->getMessage(); //mostramos el mensaje de error de la excepción
}
//registramos un mensaje de error en el log del servidor
error_log("Intento de acceso a la página sin cumplir con el requisito de edad"); 
?> 