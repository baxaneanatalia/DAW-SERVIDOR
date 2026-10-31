<?php 

//condicionales anidados
$age = 20;
$Suscrito = true;


if($age >=10){ // si la edad es mayor o igual a 10 años, entonces se ejecuta el siguiente bloque de código

    if($Suscrito){ // si la variable Suscrito es verdadera, entonces se ejecuta el siguiente bloque de código
        echo "Bienvenido a la plataforma";
    }else{
        echo "Debes suscribirte para acceder a la plataforma";
    }
}
else{ // si la edad es menor a 10 años, entonces se ejecuta el siguiente bloque de código
    echo "Debes tener al menos 10 años para acceder a la plataforma";
}

?>

<?php

//switch

$apartamento = "A"; // la variable apartamento tiene el valor "A"

switch($apartamento){ // se evalúa la variable apartamento y se compara con los casos definidos en el switch
    case "A": // si la variable apartamento tiene el valor "A", entonces se ejecuta el siguiente bloque de código
        echo "Estás en el apartamento A";
        break;
    case "B":
        echo "Estás en el apartamento B";
        break;
    case "C":
        echo "Estás en el apartamento C";
        break;
    default: // si la variable apartamento no tiene ninguno de los valores definidos , se ejecuta el siguiente bloque de código
        echo "No estás en ningún apartamento válido";
}

?>