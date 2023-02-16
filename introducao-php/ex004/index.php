<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

    <?php

    const NOME = "Lucas Barboza de Menezes Torres";

    $nomecursosuperior = "Ciência da Computação";
    echo "<strong>Nome:</strong> " . NOME . "<br>";
    echo "<strong>Curso:</strong> $nomecursosuperior"  . "<br><br>";
    
    const nomeCompleto = "Yasmin da Silva Oliveira";
    $nomecursosuperior = "Biologia";

    echo "<strong>Nome:</strong>". nomeCompleto . "<br>";
    echo "<strong>Curso:</strong> $nomecursosuperior";
    ?>

</body>
</html>