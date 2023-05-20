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
        $tabela = 'pessoas';
        // USUÁRIO PARA ACESSO AO BANCO = root
        // SENHA PARA ACESSO AO BANCO = '' (vazio)
        $usuario = 'root';
        $senha = '';

        // Fazendo o acesso e selecionando todos os dados
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco;", $usuario, $senha);
        $sql = $conexao -> prepare("SELECT * FROM $tabela");
        $sql -> setFetchMode(PDO::FETCH_ASSOC);
        $sql -> execute();
        ?>
    <main>
        <h1>Tabela com Banco de Dados</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Estado</th>
            </tr>
            <?php
                while ($dados = $sql->fetch()) {
                    // fetch() é mais econômico, não gasta tanta memória quanto o fetchAll().
                    // Mostrando os dados em forma de tabela
                    echo "<tr>";
                    echo "<td>{$dados['cod']}</td>";
                    echo "<td>{$dados['nome']}</td>";
                    echo "<td>{$dados['bairro']}</td>";
                    echo "<td>{$dados['estado']}</td>";
                    echo "</tr>";
                }

                $conexao = null;
            ?>
        </table>
    </main>
</body>
</html>