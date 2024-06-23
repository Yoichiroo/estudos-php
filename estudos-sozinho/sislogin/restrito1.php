<?php
$nivel_necessario = 1;
include "base/testa_nivel.php";
?>
<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8" />
	  <title> Restrito 1!</title>
	</head>
	<body bgcolor='green'>
		<h1>Página restrita ao Administrador 1</h1>
		<p>Ola, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

		<a href="logout.php">Logout</a>
	</body>
</html>