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
        $salario = $_REQUEST["salario"] ?? 0;
        $salarioMin = 1380;
        $resultado = $salario / $salarioMin;
        $calcBonus = $salarioMin * (int) $resultado;
        $bonus = $salario - $calcBonus;
        ?>
    <main>
        <h1>Quantos salários mínimos você ganha?</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="salario">Seu salário</label>
            <input type="number" name="salario" id="salario">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            echo "<p><strong>Seu salário:</strong> " . number_format($salario, 2, ",", ".") . "</p>";
            echo "<p>Você ganha <strong>" . number_format($resultado, 0, ",", ".") . "</strong> salário(s) mínimo(s) + <strong>R$" . number_format($bonus, 2, ",", ".") . "</strong>.</p>";
        ?>
    </section>
</body>
</html>