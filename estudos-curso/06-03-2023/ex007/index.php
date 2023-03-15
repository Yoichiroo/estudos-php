<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Número aleatório</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php 
          $numMin = $_REQUEST["min"] ?? 0;
          $numMax = $_REQUEST["max"] ?? 10;
     ?>
     <main>
          <h1>Sorteando números aleatórios</h1>
          <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
               <label for="min">Valor mínimo: </label>
               <input type="number" name="min" id="min" value="<?=$numMin?>">
               <label for="max">Valor máximo: </label>
               <input type="number" name="max" id="max" value="<?=$numMax?>">
               <input type="submit" value="Sortear">
          </form>
     </main>
     <section>
          <h2>Resultado</h2>
          <?php
               $numAleatorio = mt_rand($numMin, $numMax);
               echo "<p>Gerando um número aleatório entre <strong>$numMin</strong> e <strong>$numMax</strong></p>";
               echo "<button>O número sorteado foi <strong>$numAleatorio</strong></button>";
          ?>
     </section>
</body>
</html>