<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_REQUEST["dividendo"] ?? 0;
        $divisor = $_REQUEST["divisor"] ?? 0;
        $divisao = intdiv($dividendo, $divisor);
        $quociente = (int)($dividendo / $divisor);
        $resto = $dividendo % $divisor; 
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <?php if (!empty($dividendo) & !empty($divisor)) { ?>
        <section>
            <h2>Estrutura da Divisão</h2>
            <?php 
                echo "<p><strong>Divisão:</strong> $dividendo / $divisor = $divisao</p>";
                echo "<p><strong>Seu dividendo é:</strong> $dividendo</p>";
                echo "<p><strong>Seu divisor é:</strong> $divisor</p>";
                echo "<p><strong>Seu quociente é:</strong> $quociente</p>";
                echo "<p><strong>Seu resto é:</strong> $resto</p>";
            ?>
        </section>
    <?php }?>
</body>
</html>