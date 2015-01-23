<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sesiones</title>
</head>
<body>
	<header>
		<h1> APRENDIENDO SESIONES </h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<?php
			if(!$_SESSION){
				?>
				<li><a href="login.php">Login</a></li>
				<li><a href="registro.php">Registrate</a></li>
				<?php
			}else{
				?>
				<li><a href="logout.php">Cerrar Sesion</a></li>
				<?php
			}
			?>
		</ul>
	</nav>
	<article>
		<?php
		if($_SESSION){
			echo '<h3>Bienvenido '.$_SESSION['nombre'].'</h3>';
		}	
		?>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		 Sed sed hendrerit neque. Integer consectetur sapien imperdiet vestibulum
		 dictum. Duis vel mi quis diam tristique hendrerit id in nisi. 
		 Mauris vulputate nisl ante, id luctus quam malesuada a. 
		 Integer a sollicitudin ante. In hac habitasse platea dictumst.
		 Etiam urna ipsum, finibus at dui.</p>

		</article>
		<footer>
			<p> 2014 UAS. Esta página es un demo para aprender a utilizar sesiones </p>
		</footer>
	</body>
	</html>