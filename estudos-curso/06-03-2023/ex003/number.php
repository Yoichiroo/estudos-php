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
               $dividendo = $_REQUEST["dividendo"] ?? 0;
               $divisor = $_REQUEST["divisor"] ?? 0;
               $quociente = intdiv($dividendo, $divisor);
               $resto = $dividendo % $divisor;

               echo "<h2>Divisão: <strong>$dividendo / $divisor</strong> </h2>";
               echo "<p>Quociente da divisão: <strong>" .  $quociente  . "</strong></p>";
               echo "<p>Resto da divisão: <strong>" .  $resto  . "</strong></p>";
          ?>
     </main>
</body>
</html>