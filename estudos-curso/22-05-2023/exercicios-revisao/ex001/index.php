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
        $num = $_REQUEST['num'] ?? 0;
    ?>
    <main>
        <h1>Revisão</h1>
        <p>Números Divisíveis por 5</p>
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
                for($cont = 1; $cont <= $num; $cont++) {
                    if ($cont % 5 == 0) {
                        echo " <mark>$cont</mark> ";
                    } else {
                        echo " $cont ";
                    }
                }
            ?>
        </section>
    <?php }?>   
</body>
</html>