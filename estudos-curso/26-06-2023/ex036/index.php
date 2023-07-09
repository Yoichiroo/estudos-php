<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removendo com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once 'gerenciamento/conexao.php';

        $busca = $_REQUEST['busca'] ?? '';
        
        if ($busca !== '') {
            $sql = $conex -> prepare("SELECT * FROM $table WHERE marca LIKE '%$busca%' ORDER BY price ASC"); 
        } else {
            $sql = $conex -> prepare("SELECT * FROM $table ORDER BY price ASC"); 
        }
        $sql -> setFetchMode(PDO::FETCH_ASSOC);
        $sql -> execute();

        $total = $sql -> rowCount();
        ?>
    <main>
        <h1>Removendo com PHP</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="busca">O que deseja buscar?(procure pela marca)</label>
            <input type="text" name="busca" id="busca" value="<?=$busca?>">
            <input type="submit" value="Buscar">
        </form>
        <table>
            <th>Renavam</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Fabricação</th>
            <th>Cor</th>
            <th>Preço</th>
            <th>&#x2699;</th>
            <?php 
                while($dados = $sql -> fetch()) {
                    echo "<tr>";
                    echo "<td>{$dados['renavam']}</td>";
                    echo "<td>{$dados['marca']}</td>";
                    echo "<td>{$dados['modelo']}</td>";
                    echo "<td>{$dados['anofab']}</td>";
                    echo "<td>{$dados['cor']}</td>";
                    echo "<td>R$". number_format($dados['price'], 2, ",", ".") ."</td>";
                    echo "<td><a href='apagar.php?removeCar={$dados['renavam']}'>&#x274C</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <?php 
            echo "<p>$total carros encontrados.</p>";
            require_once 'gerenciamento/fechar-conexao.php';
        ?>
    </main>
</body>
</html>