<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
        $num = $_REQUEST["numero"] ?? 0;
        $raizQuadrada = sqrt($num);
        $raizCubica = $num ** (1/3);
        ?>
    <main>
        <h1>Digite um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$num?>">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p><strong>Número:</strong> $num</p>";
            echo "<p><strong>Raíz quadrada:</strong> " . number_format($raizQuadrada, 3, ",", ".") . "<p>";
            echo "<p><strong>Raíz cúbica:</strong> " . number_format($raizCubica, 3, ",", ".") . "<p>";
        ?>
    </section>
</body>
</html>