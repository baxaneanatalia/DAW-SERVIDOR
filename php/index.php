<?php
echo "hola mundo"; 
?>

<?= " mi primera app "; ?>

<?=  
$name = " natalia "; 
$age = '9';
$isDave = true;
$newage = $age +1; // tipado debil, en operaciones arigmeticas, convierte texto en numeros autom.
var_dump($name); // te dice por pantalla que tipo de variable alberga.
var_dump($age);
is_string($isDave);// tambien nos dice el tipo
?>

<h1>
<?= 
$newage;
$age. 55; 
?>
</h1>


<?= $apellido = (bool)'lopez';  // trasnformar a otro formato?> 

<h1>
<?= 
"hola " . $name . "con el apellido ". $apellido;// apellido es boolean por lo que muestra en pantalla  o 0 o 1.
?>
</h1>
<?= define('ID','34567');  // constantes?> 