<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 0;
    ?>
    <main>
        <h1>Fatorial de um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="num">Informe um número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php if (!empty($num)){ ?>
        <section>
            <h2>Resultado</h2>
            <p>
                <?php 
                    $comeco = $num;
                    $fatorial = 1;
                    echo "$comeco! = ";
                    while ($comeco > 1) {
                        $fatorial *= $comeco;
                        echo "$comeco x ";
                        $comeco--;
                        if ($comeco == 1) {
                            echo "$comeco";
                        }   
                    }
                    echo "= $fatorial";
                ?>
            </p>
        </section>
    <?php } ?>
</body>
</html>