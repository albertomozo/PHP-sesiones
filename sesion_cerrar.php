<?php session_start();
if (!isset($_SESSION['clienteip'])){
	header("location:caducada.html");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sesiones</title>
</head>
<body>
	<H3>Sesión</H3>

	<?php 
		echo "<p> session_id() : " . session_id() . '</p>';
	echo '<p>Listado de las variables de sesion</p>';
	foreach ($_SESSION as $key => $valor) {
		echo '<p>$_SESSION["'.$key.'"]  = '.  $valor;
	}
	echo "<p>Caducidad " . session_cache_expire() ."</p>";
	?>
	<p> Ahora vamos a cerrar la sesión </p>
	<?php session_destroy(); 
	echo '<p> intentamos ver las variables de sesion</p>';
	echo "<p> session_id() : " . session_id() . '</p>';
	if (!isset($_SESSION['clienteip']))
	{
		echo '<p>ya no existe la variable de sesion clienteip</p>';
	} else {
		echo 'si existe $_SESSION["clienteip"]';
	}

	echo "<p>Caducidad " . session_cache_expire() ."</p>";

	?>


</body>
</html>
<?php 