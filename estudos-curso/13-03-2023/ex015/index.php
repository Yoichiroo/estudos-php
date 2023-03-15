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
        $idadeUsuario = $_REQUEST["idadeUsuario"] ?? 0;
        $anoAtual = date("Y");
        $calcAno = $anoAtual - $idadeUsuario;
    ?>
    <main>
        <h1>Voto obrigatório ou opcional?</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="idadeUsuario">Digite o ano do seu nascimento</label>
            <input type="number" name="idadeUsuario" id="idadeUsuario" value="<?=$idadeUsuario?>">
            <input type="submit" value="Verificar">
        </form>
        <h2>Resultado</h2>
        <?php
            if ($idadeUsuario == 0) {
                echo "<p>Digite uma idade válida!</p>";
            } elseif ($calcAno == 0) {
                echo "<p>Você ainda não nasceu.</p>";
            } elseif ($calcAno < 16) {
                echo "<p>Você tem <strong>$calcAno</strong> anos.</p>";
                echo "<p>Seu voto <strong>não é permitido</strong> pela lei!</p>";
            } elseif ($calcAno >= 16 && $calcAno < 18) {
                echo "<p>Você tem <strong>$calcAno</strong> anos.</p>";
                echo "<p>Seu voto <strong>é permitido e opcional</strong>, pela lei.</p>";
            } elseif ($calcAno >= 18 && $calcAno <= 69) {
                echo "<p>Você tem <strong>$calcAno</strong> anos.</p>";
                echo "<p>Seu voto <strong>é permitido e obrigatório</strong>, pela lei.</p>";
            } else {
                echo "<p>Você tem <strong>$calcAno</strong> anos.</p>";
                echo "<p>Seu voto <strong>é permitido e opcional</strong>, pela lei.</p>";
            }
        ?>
    </main>
</body>
</html>