<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $anoUsuario = $_REQUEST["anoUsuario"] ?? 0;
        $anoAtual = date("Y");
        $calcAno = $anoAtual - $anoUsuario;
    ?>
    <main>
        <h1>Verificando um ano</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="anoUsuario">Digite um ano qualquer</label>
            <input type="number" name="anoUsuario" id="anoUsuario" maxlength="4" value="<?=$anoUsuario?>">
            <input type="submit" value="Verificar">
        </form>
        <h2>Resultado</h2>
    <?php
        echo "<p>Ano digitado: <strong>$anoUsuario</strong></p>";
        if ($anoUsuario == 0) {
            echo "<p>Digite um ano válido!</p>";
        } elseif ($anoUsuario == $anoAtual) {
            echo "<p>Você <strong>está</strong> no ano atual.</p>";
        } elseif ($anoUsuario < $anoAtual) {
            echo "<p>Esse ano <strong>já</strong> passou.</p>";
            echo "<p>Já se passaram <strong>$calcAno</strong> ano(s).</p>";
        } else {
            echo "<p>Esse ano <strong>ainda não</strong> passou.</p>";
            echo "<p>Faltam <strong>". abs($calcAno) . "</strong> ano(s) para chegar neste ano.</p>";
        }
    ?>
    </main>
</body>
</html>