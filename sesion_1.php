<?php 
session_start();
if (!isset($_SESSION['clienteip'])){
	header("location:caducada.html");
	exit;
}
// variables de sesion que añadimos en esta página
$_SESSION['USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
setcookie ( 'pagina' ,$_SERVER['PHP_SELF']);
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
	<p> la sesion es : <?php echo session_id(); ?> </p>
	<P><a href="sesion_1.php">sesion_1</a></P>
	<P><a href="sesion_2.php">sesion_2</a></P>
	<P><a href="nosesion.php">sin control sesion</a></P>
	<P><a href="sesion_cerrar.php">cerrar sesion</a></P>

	<?php 
	echo "<p>Caducidad " . session_cache_expire() ."</p>";

	foreach ($_SESSION as $key => $valor) {
		echo '<p>$_SESSION["'.$key.'"]  = '.  $valor;
	}
	?>


</body>
</html>
