<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>27.02.2023 - Ex002</title>
</head>
<body>
     <?php 
          $n1 = $_REQUEST["n1"] ?? 0;
          $n2 = $_REQUEST["n2"] ?? 0;
          $soma = $n1 + $n2;
          echo "<p>A soma entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$soma</strong></p>";
     ?>
</body>
</html>