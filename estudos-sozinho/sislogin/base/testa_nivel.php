<?php
if(!isset($_SESSION)) session_start();

if(!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	session_destroy();
	var_dump($_SESSION['UsuarioNivel']);
	echo "Acesso NEGADO!!!<br><br>";
	header("Location: index.php"); 
	exit;
}
?>