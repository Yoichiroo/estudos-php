<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>06.03.20232</title>
</head>
<body>
     <main>
          <?php
               $num = $_REQUEST["num"] ?? "00.00";
               $int = (int) $num;
               $dec = $num - $int;
               echo "<h1>Analisando um número</h1>";
               echo "<p>Analisando o número: <strong>". number_format($num, 2) . "</strong></p>";
               echo "<p>Parte inteira: $int</p>";
               echo "<p>Parte decimal: " . number_format($dec, 2) . "</p>"     
          ?>
          <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
     </main>
</body>
</html>