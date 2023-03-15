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
        $pesoUsuario = $_REQUEST["pesoUsuario"] ?? 0;
        $alturaUsuario = $_REQUEST["alturaUsuario"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de IMC</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <div>
                <label for="pesoUsuario">Digite seu peso (em kg)</label>
                <input type="number" name="pesoUsuario" id="pesoUsuario" value="<?=$pesoUsuario?>">
            </div>
            <div>
                <label for="alturaUsuario">Digite sua altura (em metros)</label>
                <input type="number" name="alturaUsuario" id="alturaUsuario" value="<?=$alturaUsuario?>" step="0.01">
            </div>
            <div>
                <input type="submit" value="Calcular">
            </div>
        </form>
        <h2>Resultado</h2>
        <?php 
            if ($pesoUsuario == 0 && $alturaUsuario == 0) {
                    echo "<p>Impossível calcular com estes valores. Digite um valor válido!";
                } elseif($pesoUsuario > 0 && $alturaUsuario > 0) {
                    $calcIMC = $pesoUsuario / ($alturaUsuario ** 2);
                    if ($calcIMC < 17) {
                        echo "<p>Seu IMC é de <strong>" . number_format($calcIMC, 2, ",", ".") . "</strong>. Você está <strong>muito abaixo do peso.</strong> Engorde!</p>";
                    } elseif ($calcIMC >= 17 && $calcIMC < 18.49) {
                        echo "<p>Seu IMC é de <strong>" . number_format($calcIMC, 2, ",", ".") . "</strong>. Você está <strong>abaixo do peso.</strong> Engorde!</p>";
                    } elseif ($calcIMC >= 18.50 && $calcIMC < 24.99) {
                        echo "<p>Seu IMC é de <strong>" . number_format($calcIMC, 2, ",", ".") . "</strong>. Você está <strong>no peso normal.</strong> Continue assim!</p>";
                    } elseif ($calcIMC >= 25 && $calcIMC < 29.99) {
                        echo "<p>Seu IMC é de <strong>" . number_format($calcIMC, 2, ",", ".") . "</strong>. Você está <strong>acima do peso.</strong> Emagreça!</p>";
                    } elseif ($calcIMC >= 30 && $calcIMC < 39.99) {
                        echo "<p>Seu IMC é de <strong>" . number_format($calcIMC, 2, ",", ".") . "</strong>. Você está <strong>obeso.</strong> Emagreça!</p>";
                    } else {
                        echo "<p>Seu IMC é de <strong>" . number_format($calcIMC, 2, ",", ".") . "</strong>. Você está <strong>obeso mórbido.</strong> Emagreça muito!</p>";
                    }
                }
            ?>
    </main>
</body>
</html>