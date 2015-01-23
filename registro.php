<?php
session_start();
include('lib/conexion.php');
include('lib/class.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
</head>
<body>
	<?php
	if($_SESSION){
		echo
		'<script>
		alert("Ya hay una sesion iniciada");
		window.location.href="index.php";
		</script>';
	}
	?>
	<header>
		<h1> APRENDIENDO SESIONES</h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="registro.php">Registrate</a></li>
		</ul>
	</nav>
	<article>
		<h2>Registro </h2>
		<form action="" method="post">
			<label> Nombre </label>
			<input type="text" name="nombre" value="">
			<br>
			<label> Email </label>
			<input type="email" name="email" value="">
			<br>
			<label> Password </label>
			<input type="password" name="password" value="">
			<br>
			<input type="submit" value="Registrar">
		</form>
			<?php
				if($_POST){
					$nombre = $_POST['nombre'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$add = new Usuario();
					$add->registrar_usuario($nombre, $email, $password);

				}
			?>
		</article>
		<footer>
			<p> 2014 UAS. Esta página es un demo para aprender a utilizar sesiones </p>

		</footer>
	</body>
	</html>