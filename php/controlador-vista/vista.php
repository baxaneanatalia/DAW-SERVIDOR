<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página principal de tu Banco</title>
</head>
<body>


	
    <h1>Bienvenida <?php echo $name; ?> </h1>

    <h2>Revisa tus datos bancarios</h2>

	<p> Nombre y Apellido : <?php echo $name . " " . $apellido; ?></p>
	<p> Edad : <?php echo $edad; ?></p>

    <?php
    /*aporto esta linea para que no me de error en el IDE, 
    *ya que la variable $date se define en el controlador.php y no en la vista.php */
    /** @var string $date */?>
    <p> Fecha : <?php echo $date; ?></p>

	<h3 >Tu saldo actual es de: <?php echo $saldo; ?> </h3> 

</body>
</html>
