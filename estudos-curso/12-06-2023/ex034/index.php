<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $bd = 'empresa';
        $tabela = 'funcionarios';

        $conexao = new PDO("mysql:host=$server;dbname=$bd;", $user, $pass);
        $sql = $conexao -> prepare("SELECT * FROM $tabela WHERE nome LIKE '__r%' ORDER BY nome ASC");
        $sql -> setFetchMode(PDO::FETCH_ASSOC);
        $sql -> execute(); 
    ?>
    <main>
        <h1>Banco de Dados - p2</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Setor</th>
                <th>Idade</th>
                <th>Salário</th>
            </tr>
                <?php 
                    while($dados = $sql -> fetch()) {
                        echo "<tr>";
                        echo "<td>{$dados['cod']}</td>";
                        echo "<td>{$dados['nome']}</td>";
                        echo "<td>{$dados['setor']}</td>";
                        echo "<td>{$dados['idade']}</td>";
                        echo "<td>R$ ". number_format($dados['salario'], 2, ",", ".") ."</td>";
                        echo "</tr>";
                    }

                    $sql = null;
                    $conexao = null;
                    unset($conexao);
                ?>
        </table>
    </main>
</body>
</html>