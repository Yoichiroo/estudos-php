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
        $precoProduto = $_REQUEST["precoProduto"] ?? 0;
        $desc10 = ($precoProduto * 10) / 100;
        $desc15 = ($precoProduto * 15) / 100;
        $desc18 = ($precoProduto * 18) / 100;
        $descFinal;
    ?>
    <main>
        <h1>Descontos</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="precoProduto">Digite o preço de um produto</label>
            <input type="number" name="precoProduto" id="precoProduto" step="0.01" value="<?=$precoProduto?>">
            <input type="submit" value="Calcular">
        </form>
        <h2>Resultado</h2>
        <?php
            if ($precoProduto == 0) {
                echo "<p>Impossível descontar algo de 0, digite um valor válido.</p>";
            } elseif ($precoProduto <= 100) {
                $descFinal = $precoProduto - $desc10;
                echo "<p>Este produto com o preço de <strong>R$$precoProduto em desconto de 10% fica com R$$descFinal</strong>, tendo uma <strong>diferença</strong> de R$$desc10.</p>";
            } elseif ($precoProduto > 100 && $precoProduto <= 1000) {
                $descFinal = $precoProduto - $desc15;
                echo "<p>Este produto com o preço de <strong>R$$precoProduto em desconto de 15% fica com R$$descFinal</strong>, tendo uma <strong>diferença</strong> de R$$desc15.</p>";
            } else {
                $descFinal = $precoProduto - $desc18;
                echo "<p>Este produto com o preço de <strong>R$$precoProduto em desconto de 18% fica com R$$descFinal</strong>, tendo uma <strong>diferença</strong> de R$$desc18.</p>";
            }
        ?>
    </main>
</body>
</html>