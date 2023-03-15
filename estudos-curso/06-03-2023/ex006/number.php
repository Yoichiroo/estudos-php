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
               $num = $_REQUEST["numero"];
               $raizQuadrada = sqrt($num);
               $raizCubica = $num ** 0.33;
               echo "<h2>Número: $num</h2>";
               echo "<p>Raíz quadrada: <strong>" . number_format($raizQuadrada, 2, ",", ".") . "</strong><p>";
               echo "<p>Raíz quadrada: <strong>" . number_format($raizCubica, 2, ",", ".") . "</strong><p>";
          ?>
          <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
     </main>
</body>
</html>