<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números divisíveis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 0;
    ?>
    <main>
        <h1>Números divisíveis pelo número digitado</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="num">Informe um número: </label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php if(!empty($num)){?>
        <section>
            <p>
                <?php 
                    $cont = 0;
                    $fim = 100;
                    while ($cont <= 100) {
                        if ($cont % $num == 0) {
                            echo "<mark>$cont, </mark>";
                        } else {
                            echo "$cont, ";
                        }
                        $cont++;
                    }
                    echo "FIM!";
                ?>
            </p>
        </section>
    <?php }?>
</body>
</html>
