<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $min = 10;
        $max = 100;
        $num = mt_rand($min, $max);
    ?>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro valor</button>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "<p>O número gerado foi <strong>$num</strong></p>";
        ?>
    </section>
</body>
</html>