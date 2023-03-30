<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ex001</title>
     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     <?php 
          $nome = $_REQUEST["nome"] ?? "";
          $salario = $_REQUEST["salario"] ?? "    ";
          $tempCont = $_REQUEST["tempCont"] ?? "";
          $aumentoMin = ((int) $salario / 100) * 5;
          $aumentoMed = ((int) $salario / 100) * 8;
          $aumentoMax = ((int) $salario / 100) * 12;
     ?>
     <main>
          <h1>Aumento de salário</h1>
          <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
               <label for="nome">Nome: </label>
               <input type="text" name="nome" id="nome" value="<?=$nome?>">
               <label for="salario">Salário (R$):</label>
               <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
               <label for="tempCont">Tempo de Contrato</label>
               <select name="tempCont" id="tempCont">
                    <option value="min"<?=($tempCont === "min"? "selected" : "")?>>1 a 5 anos</option>
                    <option value="med"<?=($tempCont === "med"? "selected" : "")?>>6 a 10 anos</option>
                    <option value="max"<?=($tempCont === "med"? "selected" : "")?>>Acima de 10 anos</option>
               </select>
               <input type="submit" value="Reajustar">
          </form>
     </main>
     <section>
          <h2>Resultado</h2>
          <?php
               if ($nome == "" || $salario == "" || $tempCont == "") {
                    echo "<p><strong>Por favor, preencha o formulário acima.</strong></p>";
               } else {
                    if ($tempCont == "min") {
                         $tempCont = "1 a 5 anos";
                         echo "<p><strong>Nome:</strong> $nome</p>";
                         echo "<p><strong>Salário:</strong> $salario</p>";
                         echo "<p><strong>Tempo de Contrato:</strong> $tempCont</p>";
                         echo "<p><strong>Aumento do salário:</strong> R$" . number_format($aumentoMin, 2, ",", ".") . "</p>";
                         echo "<p><strong>Salário reajustado</strong>: R$" . number_format($salario + $aumentoMin, 2, ",", ".") . "</p>";
                    } elseif ($tempCont == "med") {
                         $tempCont = "6 a 10 anos";
                         echo "<p><strong>Nome:</strong> $nome</p>";
                         echo "<p><strong>Salário:</strong> $salario</p>";
                         echo "<p><strong>Tempo de Contrato:</strong> $tempCont</p>";
                         echo "<p><strong>Aumento do salário:</strong> R$" . number_format($aumentoMed, 2, ",", ".") . "</p>";
                         echo "<p><strong>Salário reajustado</strong>: R$" . number_format($salario + $aumentoMed, 2, ",", ".") . "</p>";
                    } elseif ($tempCont == "max") {
                         $tempCont = "Acima de 10 anos";
                         echo "<p><strong>Nome:</strong> $nome</p>";
                         echo "<p><strong>Salário:</strong> $salario</p>";
                         echo "<p><strong>Tempo de Contrato:</strong> $tempCont</p>";
                         echo "<p><strong>Aumento do salário:</strong> R$" . number_format($aumentoMax, 2, ",", ".") . "</p>";
                         echo "<p><strong>Salário reajustado</strong>: R$" . number_format($salario + $aumentoMax, 2, ",", ".") . "</p>";
                    }
               }
          ?>
     </section>
</body>
</html>