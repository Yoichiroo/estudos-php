<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    //Dupla coalescencia
        $nome = $_REQUEST["nome"] ?? "desconhecido";
        echo "Seu nome é $nome."
    ?>
</body>
</html>