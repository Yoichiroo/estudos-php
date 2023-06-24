<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca em Banco de Dados com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once 'gerenciamento/abrir-banco.php';
        $busca = $_REQUEST['busca'] ?? '';

        if ($busca !== "") {
            $sql = $conexao -> prepare("SELECT * FROM contato WHERE nome LIKE '%$busca%' ORDER BY nome ASC");
        } else {
            $sql = $conexao -> prepare("SELECT * FROM contato ORDER BY nome ASC ");
        }
        $sql -> setFetchMode(PDO::FETCH_ASSOC);
        $sql -> execute();
        $total = $sql -> rowCount();
    ?>
    <main>
        <h1>Busca em Banco de Dados</h1>
        <table>
            <th>COD</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>BAIRRO</th> 
            <?php 
                while ($dados = $sql -> fetch()) {
                    echo "<tr>";
                    echo "<td>{$dados['cod']}</td>";
                    echo "<td>{$dados['nome']}</td>";
                    echo "<td>{$dados['telefone']}</td>";
                    echo "<td>{$dados['bairro']}</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="busca">Buscar</label>
            <input type="text" name="busca" id="busca" value="<?=$busca?>">
            <input type="submit" value="Buscar">
        </form>
        <p><?=$total?> contatos encontrados.</p>
        <a href="cadastro-form.php">Cadastrar novo</a>
        <?php 
            require_once 'gerenciamento/fechar-banco.php';
        ?>
    </main>
</body>
</html>