<?php 
//declaramos variable y asignamos valor

$name = " natalia ";
$age = '9';
$esMayor = true;
$altura = 1.50;

//operadadores de asignacion
$age += 1; // $age = $age + 1;
$name = "Carla"; //la variable name ahora tiene el valor "Carla"

echo $age;
echo "<br>";
echo $name;
echo "<br>";

//operadores aritmeticos

echo $altura + 1;// la altura es 1.50 y le sumamos 1, el resultado es 2.50
echo "<br>";
echo $altura *55; // la altura es 1.50 y la multiplicamos por 55, el resultado es 82.5
echo "<br>";

//operadores de comparacion 

var_dump($age > 18); // el resultado es false porque age es 10 y no es mayor a 18
echo "<br>";
var_dump($age < 18); // el resultado es true porque age es 10 y es menor a 18
echo "<br>";
var_dump($age == 10); // el resultado es true porque age es 10 y es igual a 10
echo "<br>";

//operadores logicos
var_dump($esMayor && $age>=18); // el resultado es false porque esMayor es true pero age no es mayor o igual a 18
echo "<br>";
var_dump(!$esMayor ); // el resultado es false porque esMayor es true y el operador ! niega el valor de la variable
echo "<br>";
