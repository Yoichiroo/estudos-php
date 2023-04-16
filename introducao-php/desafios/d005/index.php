<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de números reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 000.000;
        $parteInt = (int) $num;
        $parteFrac = $num - $parteInt;
    ?>
    <main>
        <h1>Informe um número real</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="num">Número real</label>
            <input type="number" name="num" id="num" step="0.001" value="<?=$num?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <?php 
            echo "<p>Analisando o número <strong>$num</strong> informado pelo usuário:</p>";
            echo "<ul>";
            echo "<li>A parte inteira do número é <strong>$parteInt</strong></li>";
            echo "<li>A parte fracionária do número é <strong>" . number_format($parteFrac, 3, ",", ".") . "</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>