<?php
$nivel_necessario = 3;
include "base/testa_nivel.php";
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title> Restrito 3!</title>
	</head>
	<body bgcolor='yellow'>
		<h1>Página restrita ao Administrador 3</h1>
		<p>Ola, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

		<a href="logout.php">Logout</a>
	</body>
</html>