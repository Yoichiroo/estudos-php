<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $val1 = $_REQUEST["valor1"] ?? 0;
            $val2 = $_REQUEST["valor2"] ?? 0;
        ?>
        <h1>Formulário retroalimentado</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?=$val1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$val2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $val1 + $val2;
            echo "<p>A soma entre os valores $val1 e $val2 é <strong>igual a $soma</strong>.</p>";
        ?>
    </section>
</body>
</html>