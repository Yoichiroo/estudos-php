<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php require_once "includes/header.php"; ?>
    <main>
        <h1>Login</h1>
        
        <img src="imagens/lock.png" alt="Login" class="direita">

        <p>Para ter acesso a certos conteúdos desse site, você precisa ser um usuário cadastrado.</p>

        <form action="logar-sistema.php" method="post">
            <div>
                <label for="fusu">Usuário</label>
                <input type="text" name="fusu" id="fusu" maxlength="20" required>
            </div>
            <div>
                <label for="fsen">Senha</label>
                <input type="password" name="fsen" id="fsen" minlength="8" maxlength="20" required>
            </div>
            <div>
                <input type="submit" value="Entrar">
            </div>
        </form>

        <p>&#x1F448; <a href="index.php">Voltar</a></p>
    </main>
</body>
</html>