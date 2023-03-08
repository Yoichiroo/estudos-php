<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Resultado</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <main>
          <h1>Resultado</h1>
          <?php 
               $salario = $_REQUEST["salario"] ?? 0;
               $salarioMin = 1300;
               $resultado = $salario / $salarioMin;
               echo "<h2>Seu salário: " . number_format($salario, 2, ",", ".") . "</h2>";
               echo "<p>Você ganha <strong>" . number_format($resultado, 2, ",", ".") . "</strong> salário(s) mínimo(s).</p>"
          ?>
          <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
     </main>
</body>
</html>