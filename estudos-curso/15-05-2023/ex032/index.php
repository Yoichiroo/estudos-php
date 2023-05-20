<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados e PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $servidor = 'localhost';
        $banco = 'faetec';
        $usuario = 'root';
        $senha = '';

        $conexao = new PDO("mysql:host=$servidor;dbname=$banco;", $usuario, $senha);

        ?>
    <main>
        <h1>Acessando o Banco de Dados com PHP</h1>
        <pre>
            <?php
                $busca = $conexao -> prepare("SELECT * FROM pessoas");
                $busca -> setFetchMode(PDO::FETCH_ASSOC);
                $busca->execute();
                $dados = $busca->fetchAll();
                
                foreach($dados as $indice => $info) {
                    echo "<p>A {$indice}° pessoa se chama {$info['nome']}, mora no bairro <strong>{$info['bairro']} /{$info['estado']}</strong></p>";
                }

                $conexao = null;
            ?>
        </pre>
    </main>
</body>
</html>