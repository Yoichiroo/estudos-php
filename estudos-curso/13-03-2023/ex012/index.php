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
        $anoAtual = date("Y");
        $anoUsuario = $_REQUEST["anoUsuario"] ?? 0;
        $maiorIdade = 21;
    ?>
    <main>
        <h1>Você é maior ou menor de idade?</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for = "anoUsuario">Digite o ano do seu nascimento</label>
            <input type = "number" name="anoUsuario" id="anoUsuario" value="<?=$anoUsuario?>" maxlength="4">
            <input type="submit" value="Verificar">
        </form>
        <h2>Resultado</h2>
        <?php
            if($anoUsuario == 0) {
                echo "<p>Digite um ano.";
            } elseif ($anoUsuario > 0) {
                $calcAno = $anoAtual - $anoUsuario;
                if ($calcAno < 0) {
                    echo "<p> Você ainda não nasceu!</p>";
                } else {
                    echo "<p>Você tem <strong>$calcAno</strong> ano(s).";
                    if ($calcAno >= $maiorIdade) {
                        echo "<p>Você é <strong>maior</strong> de idade.</p>";
                    } else {
                        echo "<p>Você é <strong>menor</strong> de idade.</p>";
                    }
                }
            }
        ?>
    </main>
</body>
</html>