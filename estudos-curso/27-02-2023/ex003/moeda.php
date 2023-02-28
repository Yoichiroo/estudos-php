<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $moeda = $_REQUEST["moeda"] ?? 0;
        $cotacaoDolar = 5.20;
        $calc = $moeda / $cotacaoDolar;
        echo "R\$ " . number_format($moeda, 2, ",", ".") . " em dólar é US\$ " . number_format($calc, 2, ",", ".")
    ?>
</body>
</html>