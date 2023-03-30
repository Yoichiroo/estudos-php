<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ex002</title>
     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     <main>
          <?php 
               $valorA = $_REQUEST["valorA"] ?? "";
               $valorB = $_REQUEST["valorB"] ?? "";
               $valorC = $_REQUEST["valorC"] ?? "";
               ?>
          <!-- Δ -->
          <h1>Equação do 2° grau</h1>
          <p>Escreva os valores de A, B e C para o cálculo</p>
          <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
               <label for="valorA">A: </label>
               <input type="number" name="valorA" id="valorA" value="<?=$valorA?>">
               <label for="valorB">B: </label>
               <input type="number" name="valorB" id="valorB" value="<?=$valorB?>">
               <label for="valorC">C: </label>
               <input type="number" name="valorC" id="valorC" value="<?=$valorC?>">
               <input type="submit" value="Calcular">
          </form>
     </main>
     <section>
          <h2>Resultado</h2>
          <?php
               $formDelta = ((int) $valorB)**2 - 4 * ((int)$valorA) * ((int)$valorC);
               $formRaizQuadrada = sqrt($formDelta);
               if ($valorA == "" || $valorB == "" || $valorC == "") {
                    echo "<p><strong>Por favor, preencha o formulário acima.</strong></p>";
               } else {
                    if ($formDelta == 0) {
                         echo "<p><strong>Raíz:</strong> nula</p>";
                    }elseif($formDelta < 0) {
                         echo "<p><strong>Cálculo</strong>: Δ = $valorB ² - 4 * $valorA * $valorC</p>";
                         echo "<p><strong>Resultado:</strong> ". number_format($formDelta, 2, ",", ".") ."</p>";
                         echo "<p><strong>Raíz quadrada do resultado inexistente, já que o cálculo dá um resultado negativo.";
                    } else {
                         echo "<p><strong>Cálculo</strong>: Δ = $valorB ² - 4 * $valorA * $valorC</p>";
                         echo "<p><strong>Resultado:</strong> ". number_format($formDelta, 2, ",", ".") ."</p>";
                         echo "<p><strong>Raíz quadrada do resultado:</strong> ". number_format($formRaizQuadrada, 2, ",", ".") ."</p>";
                    }
               }
          ?>
     </section>
</body>
</html>