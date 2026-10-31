<?php

function saldo ($salario){ //definimos la función saldo que recibe un parámetro $salario
    $salario = $salario - 150; //restamos 150 al salario que recibimos como parámetro
    return $salario;  //devolvemos el valor del salario modificado
}
//llamamos a la función saldo y le pasamos el valor 15009 como parámetro, el resultado se guarda en la variable $salario
$salario = saldo(15009); 
echo "Tu saldo actual es de : " . $salario . "<br>"; //imprimimos el valor de la variable $salario




function sumar($numero){ //definimos la función sumar que recibe un parámetro $numero
    $numero = $numero +10; //la operación se hace dentro de la funcion
    echo "El resultado de la suma es: " . $numero . "<br>"; //imprimimos el resultado de la suma dentro de la función
}

$numero1= 55;
sumar($numero1); //llamamos a la función sumar y le pasamos el valor de la variable $numero1 como parámetro
echo "El valor es: " . $numero1 . "<br>"; //imprimimos el valor de la variable $numero1 que no está modificada 


function restar (&$numero){
    $numero =$numero - 10; //la operación se hace dentro de la funcion
    echo "El resultado de la resta es: " . $numero . "<br>"; //imprimimos el resultado de la resta dentro de la función
}

$numero2= 45;
restar($numero2); //llamamos a la función restar y le pasamos el valor de la variable $numero2 como parámetro
echo "El valor es: " . $numero2 . "<br>"; //imprimimos el valor  que está modificada porque se pasó por referencia