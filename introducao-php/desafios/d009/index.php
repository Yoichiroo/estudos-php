<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $val1 = $_REQUEST["valor1"] ?? 0;
    $peso1 = $_REQUEST["peso1"] ?? 1;
    $val2 = $_REQUEST["valor2"] ?? 0;
    $peso2 = $_REQUEST["peso2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?=$val1?>">
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$val2?>">
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular médias">

        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            // Média ponderada x = (x1 * p1) + (x2 * p2) / (p1 + p2)
            $mediaSimples = ($val1 + $val2) / 2;
            $mediaPonderada = ($val1 * $peso1 + $val2 * $peso2) / ($peso1 + $peso2);
            echo "<p>Analisando os valores $val1 e $val2:</p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaSimples, 2, ",", ".") . ".</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a " . number_format($mediaPonderada, 2, ",", ".") . ".</li>";
        ?>
    </section>
</body>
</html>