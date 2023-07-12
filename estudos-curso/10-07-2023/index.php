<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once 'includes/abre-banco.php';
       
        $bus = $_REQUEST['bus'] ?? '';

        if (empty($bus)) {
            $sql = "SELECT * FROM $tabela ORDER BY modelo ASC";
        } else {
            $sql = "SELECT * FROM $tabela WHERE modelo LIKE '%$bus%' ORDER BY modelo ASC";
        }

        $busca = $conex->prepare($sql);
        $busca->setFetchMode(PDO::FETCH_ASSOC);
        $busca->execute();
        $total = $busca->rowCount();
    ?>

    <main>
        <section id="busca">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="bus">Buscar</label>
                <input type="text" name="bus" id="bus">
                <input type="submit" value="Ok">
            </form>
        </section>
        <section id="resultado">
            <table>
                <tr>
                    <th>Renavam</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Fabricação</th>
                    <th>Cor</th>
                    <th>Preço</th>
                    <th>&#x2699;</th>
                </tr>
                <?php 
                    while($dados = $busca->fetch()) {
                        echo "<tr>";
                        echo "<td>{$dados['renavam']}</td>";
                        echo "<td>{$dados['modelo']}</td>";
                        echo "<td>{$dados['marca']}</td>";
                        echo "<td>{$dados['anofab']}</td>";
                        echo "<td>{$dados['cor']}</td>";
                        echo "<td>{$dados['preco']}</td>";
                        echo "<td>";
                        echo "<a href='apagar.php?ref={$dados['renavam']}' onclick='return confirm(`Quer mesmo apagar o veículo {$dados['renavam']}?`)'>&#x274C;</a>";
                        echo "<a href='editar.php?ref={$dados['renavam']}'>&#x1F4DD;</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <?="$total contatos encontrados."?>
        </section>
    </main>
    <?php require_once 'includes/fecha-banco.php'; ?>
</body>
</html>