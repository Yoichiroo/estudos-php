<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Exercício de PHP</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php 
          $sexo = $_REQUEST["sexo"] ?? "M";
          $salarioAtual = $_REQUEST["salario"] ?? 0;
          $nome = $_REQUEST["nome"] ?? "";
          $aumentoHomem = ((int) $salarioAtual / 100) * 10;
          $aumentoMulher = ((int) $salarioAtual / 100) * 14;
          $salarioNovoHomem = $salarioAtual + $aumentoHomem;
          $salarioNovoMulher = $salarioAtual + $aumentoMulher;
     ?>
     <main>
          <h1>Novo salário</h1>
          <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
               <label for="nome">Nome</label>
               <input type="text" name="nome" id="nome" value="<?=$nome?>">     
               <fieldset>
                    <legend>Sexo</legend>
                    <input type="radio" name="sexo" id="sexoM" value="M" <?=($sexo == "M") ? "checked" : ""?>>
                    <label for="sexoM">Masculino</label>
                    <input type="radio" name="sexo" id="sexoF" value="F" <?=($sexo == "F") ? "checked" : ""?>>
                    <label for="sexoF">Feminino</label>
               </fieldset>
               <label for="salario">Salário atual:</label>
               <input type="number" name="salario" id="salario" value="<?=$salarioAtual?>" step="0.01">
               <input type="submit" value="Calcular">
          </form>
     </main>
     <section>
          <h2>Resultado</h2>
          <?php 
               if ($sexo == "" || $salarioAtual == 0 || $nome == "" ) {
                    echo "<p><strong>Por favor, preencha o formulário acima.</strong></p>";
               } else {
                    if ($sexo == "M") {
                         echo "<p><strong>Nome do funcionário</strong>: $nome</p>";
                         echo "<p><strong>Salário atual do funcionário</strong>: ". number_format($salarioAtual, 2, ",", ".") . "</p>";
                         echo "<p><strong>Aumento</strong>: ". number_format($aumentoHomem, 2, ",", ".") .  "</p>";
                         echo "<p><strong>Salário novo do funcionário</strong>: " . number_format($salarioNovoHomem, 2, ",", ".") . "</p>";
                    } elseif ($sexo == "F") {
                         echo "<p><strong>Nome da funcionária</strong>: $nome</p>";
                         echo "<p><strong>Salário atual da funcionária</strong>: ". number_format($salarioAtual, 2, ",", ".") . "</p>";
                         echo "<p><strong>Aumento</strong>: " . number_format($aumentoMulher, 2, ",", ".") . "</p>";
                         echo "<p><strong>Salário novo da funcionária</strong>: ". number_format($salarioNovoMulher, 2, ",", ".") . "</p>";
                    }
               }
          ?>
     </section>
</body>
</html>