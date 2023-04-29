<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complemento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Complemento</h1>
        <form action="index.php?tipo=Aluno&turno=Manha" method="post">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>