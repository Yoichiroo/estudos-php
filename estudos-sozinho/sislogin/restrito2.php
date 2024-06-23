<?php
$nivel_necessario = 2;
include "base/testa_nivel.php";
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title> Restrito 2!</title>
	</head>
	<body bgcolor='blue'>
		<h1>Página restrita ao Administrador 2</h1>
		<p>Ola, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

		<a href="logout.php">Logout</a>
	</body>
</html>