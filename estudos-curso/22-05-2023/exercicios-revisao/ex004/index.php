<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $pessoas = [
            [
                "nome" => "Maria Eduarda",
                "idade" => 16,
                "salario" => 3500.80
            ],
            [
                "nome" => "William Marinho",
                "idade" => 15,
                "salario" => 2800.30
            ],
            [
                "nome" => "Vitória Luiza",
                "idade" => 15,
                "salario" => 2300.60
            ],
            [
                "nome" => "Erick Mendes",
                "idade" => 17,
                "salario" => 2950.20
            ],
            [
                "nome" => "Luiz Gustavo",
                "idade" => 17,
                "salario" => 2800.70
            ],
            [
                "nome" => "Maria Rafaela",
                "idade" => 16,
                "salario" => 2700.50
            ],
            [
                "nome" => "Fernanda Almeida",
                "idade" => 15,
                "salario" => 3780.20
            ],
            [
                "nome" => "Andrew Soares",
                "idade" => 16,
                "salario" => 1320.15
            ],
        ];
    ?>
    <main>
        <h1>Tabela de Funcionários</h1>
        <table>
            <th>Código</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Salário</th>
            <?php 
                foreach($pessoas as $indice => $info) {
                    echo "<tr>";
                    echo "<td>$indice</td>";
                    echo "<td>{$info['nome']}</td>";
                    echo "<td>{$info['idade']}</td>";
                    echo "<td>R$ ". number_format($info['salario'], 2, ",", ".") ."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
</body>
</html>