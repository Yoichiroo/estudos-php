<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Ver a resolução depois (como fzr o label atualizar) -->
    <?php 
        $precoProduto = $_REQUEST['precoProduto'] ?? 00;
    ?>  
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="precoProduto">Preço do Produto(R$)</label>
            <input type="number" name="precoProduto" id="precoProduto" value="<?=$precoProduto?>">
            <?php 
            $percentualReajuste = $_REQUEST['percentualReajuste'] ?? 00;
            ?>
            <label for="percentualReajuste">Qual será o percentual de reajuste? <strong>(<span id="percentualValor"></span>%)</strong></label>
            <input type="range" name="percentualReajuste" id="percentualReajuste" value="<?=$percentualReajuste?>" oninput="mudarValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php if(!empty($precoProduto) & !empty($percentualReajuste)) { ?>
        <section>
            <h2>Resultado do Reajuste</h2>
            <?php 
                $calcPorcentagem = ($precoProduto * $percentualReajuste) / 100;
                $calcReajuste = $precoProduto + $calcPorcentagem;
                echo "O produto que custava R$" . number_format($precoProduto, 2, ",", ".") . ", com <strong>$percentualReajuste% de aumento</strong> vai passar a custar <strong>R$" . number_format($calcReajuste, 2, ",", ".") . "</strong> a partir de agora.";
            ?>
        </section>
    <?php } ?>
    <script>
        mudarValor()

        function mudarValor() {
            percentualValor.innerText = percentualReajuste.value
        }
    </script>
</body>
</html>