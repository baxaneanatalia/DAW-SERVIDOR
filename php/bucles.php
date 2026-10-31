<?php   

//while

$planta= 1;

while($planta <=10 ){
    echo "estás en la planta número ".$planta ."<br>";
    $planta++; //incrementamos la variable planta en 1

}


//do while

$apartamento =15;

do{
    echo "estás en el apartamento número ".$apartamento ."<br>";
    $apartamento--; //decrementamos la variable apartamento en 1    
}
//mientras la variable apartamento sea mayor o igual a 1 y menor o igual a 15, se ejecuta el bloque de código
while($apartamento >=1 && $apartamento <=15); 


//for
//iniciamos la variable piso en 1, mientras piso sea menor o igual a 10, incrementamos piso en 1
for($piso=1; $piso <=10; $piso++){ 
    echo "estás en el piso número ".$piso ."<br>";
}

//foreach

$edificio = array("piso 1", "piso 2", "piso 3", "piso 4", "piso 5");

foreach($edificio as $piso){
    echo "estás en el   " .$piso ."<br>";
}

?>