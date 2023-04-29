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
        <h1>Números primos</h1>
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
            </p>
        </section>
    <?php } ?>
</body>
</html>