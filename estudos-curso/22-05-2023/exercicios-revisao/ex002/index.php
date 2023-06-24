<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 0;
    ?>
    <main>
        <h1>Tabuada</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="num">Digite um número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php if(!empty($num)) { ?>
    <section>
        <h2>Resultado</h2>
        <?php
            $tabuada = [];
            for($cont = 0; $cont <= 10; $cont++) {
                $calc = $num * $cont;
                array_push($tabuada, $calc);
                echo "<p>$num x $cont = $tabuada[$cont]</p>";
            }
        ?>
    </section>
    <?php } ?>
</body>
</html>