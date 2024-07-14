<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8" />
	<title> Hello!</title>
	</head>
	<body>
		<form action="validacao.php" method="get">
			<fieldset>
			<legend>Dados de Login</legend>
				<label for="txUsuario">Usuario</label>
				<input type="text" name="usuario" id="txUsuario" maxlength="25" />
				<label for="txSenha">Senha</label>
				<input type="password" name="senha" id="txSenha" />

				<input type="submit" value="Entrar" />
			</fieldset>
		</form>
	</body>
</html>
