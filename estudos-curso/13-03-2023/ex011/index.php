<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $n1 = $_REQUEST["n1"] ?? 0;
        ?>
    <main>
        <h1>Par ou ímpar?</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="n1">Digite um valor: </label>
            <input type="number" name="n1" id="n1" value="<?=$n1?>">
            <input type="submit" value="Verificar">
        </form>
        <h2>Resultado</h2>
        <?php
            $calc = $n1 % 2;
            if ($n1 == 0) {
                echo "<p>Por favor, digite um número.</p>";
            } elseif ($calc == 0) {
                echo "<p>O número digitado $n1 é <strong>PAR</strong>.</p>";
            } else {
                echo "<p>O número digitado $n1 é <strong>ÍMPAR</strong>.</p>";
            }
        ?>
    </main>
</body>
</html>