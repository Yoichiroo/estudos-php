<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sincronizando PHP com MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $pessoas = array(
            array(
                "nome" => "Ana Guedes",
                "bairro" => "Bangu",
                "estado" => "RJ"
            ),
            array(
                "nome" => "Yasmin Oliveira",
                "bairro" => "Vila Kennedy",
                "estado" => "RJ"
            ),
            array(
                "nome" => "João Caires",
                "bairro" => "Jardim Brasil",
                "estado" => "SP"
            ),
            array(
                "nome" => "Maria Eduarda",
                "bairro" => "Guadalupe",
                "estado" => "RJ"
            ),
            array(
                "nome" => "Maíra Valente",
                "bairro" => "Pirenópolis",
                "estado" => "GO"
            )
        );
    ?>
    <main>
        <h1>Banco de Dados e PHP</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Estado</th>
            </tr>
            <?php 
                foreach($pessoas as $info => $pessoa) {
                    echo "<tr>";
                    echo "<td>{$pessoa['nome']}</td>";
                    echo "<td>{$pessoa['bairro']}</td>";
                    echo "<td>{$pessoa['estado']}</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
</body>
</html>