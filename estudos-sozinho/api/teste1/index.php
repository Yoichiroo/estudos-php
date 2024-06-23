<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Fundo de Imagem</title>
</head>
<body>
    <h1>Remover Fundo de Imagem</h1>
    <form action="processar_imagem.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagem" accept="image/*" required>
        <br><br>
        <button type="submit">Enviar Imagem</button>
    </form>
</body>
</html>
