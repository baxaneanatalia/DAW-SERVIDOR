<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codigo Embebido de PHP dentro de HTML</title>
</head>
<body>
	

    <?php
    $name = "Carla"; //la variable name ahora tiene el valor "Carla"

    echo"<h1>Buenos días, $name </h1>"; //imprimimos el valor de la variable name dentro de un encabezado h1
    echo "<br>";
    echo "<p>Hoy es " . date("d/m/Y") . " </p>"; /*imprimimos la fecha actual en formato 
                                                    día/mes/año dentro de un párrafo*/

    ?>

</body>
</html>
 