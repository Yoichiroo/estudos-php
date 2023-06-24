<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Cadastro com PHP</h1>
        <form action="cadastro-salvar.php" method="post">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="telefone">Telefone/Celular</label>
                <input type="number" name="telefone" id="telefone" required>
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" required>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </main>
</body>
</html>