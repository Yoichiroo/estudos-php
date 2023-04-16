<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas 2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Cotação da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);

        $cotacao = number_format($dados["value"][0]["cotacaoCompra"], 2, ",", ".");

        $real = $_REQUEST["real"] ?? 0;

        $dolar = (int) $real / (int) $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Conversor de moedas 2.0</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="real">Quantos R$ você tem na carteira?</label>
            <input type="number" name="real" id="real" step="0.001" value="<?=$real?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $dolar, "USD") ."</strong>.</p>";
            echo "<p><strong>Cotação de R$$cotacao vinda diretamente da API do Banco Central.</strong></p>";
        ?>
    </section>
</body>
</html>