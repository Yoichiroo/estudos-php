<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $real = $_REQUEST["moeda"] ?? 00.00;
        $cotacao = 4.91;
        $realEmDolar =  $real / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Conversor de Moedas 1.0</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="moeda">Quantos R$ você tem na carteira?</label>
            <input type="number" name="moeda" id="moeda" value="<?=$real?>" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $realEmDolar, "USD") ."</strong></p>";
            echo "<p><strong>Cotação fixa de R$$cotacao diretamente informada no código.</strong></p>";
        ?>
    </section>
</body>
</html>