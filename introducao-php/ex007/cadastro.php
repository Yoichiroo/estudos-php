<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMS em PHP - parte 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            /* Conteúdo de uma variável superglobal
                var_dump($_GET);
                var_dump($_POST);
                var_dump($_REQUEST); // Junção de $_GET, $_POST, $_COOKIES
            */
            $nome = $_REQUEST["nome"] ?? "Desconhecido";
            $sobrenome = $_REQUEST["sobrenome"] ?? "Indigente";
            echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome!</strong> Este é o meu site."
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar para a página anterior</button></p>
    </main>
</body>
</html>