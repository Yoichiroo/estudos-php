<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
            $num = $_REQUEST["num"] ?? 0;
            $antecessor = $num - 1;
            $sucessor = $num + 1;
        ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>O seu <em>antecessor</em> é <strong>$antecessor</strong></p>";
            echo "<p>O seu <em>sucessor</em> é <strong>$sucessor</strong></p>";
        ?>
    </section>
</body>
</html>