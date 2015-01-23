<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
if($_SESSION){

	if($_SESSION['privilegios'] != "Administrador"){
	echo
	 '<script>
      alert("Error de autenticacion");
	  window.location.href="../index.php";
      </script>';
  }
}else{

	echo
	 '<script>
	  window.location.href="../index.php";
      </script>';
}
?>
<h1>CPANEL </h1>

<p>Panel de control de Administrador </p>

<p>Gestión del sistema</p>
</body>
</html>