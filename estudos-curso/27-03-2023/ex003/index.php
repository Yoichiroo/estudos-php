<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ex003</title>
     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     <?php 
          $nome = $_REQUEST["nome"] ?? "";
          $sexo = $_REQUEST["sexo"] ?? "";
          $idade = $_REQUEST["idade"] ?? 0;
     ?>

     <main>
          <h1>Consumo de remédio com base em viéses cognitivos</h1>
          <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
               <label for="nome">Nome: </label>
               <input type="text" name="nome" id="nome" value="<?=$nome?>">
               <fieldset>
                    <legend>Sexo</legend>
                    <input type="radio" name="sexo" id="sexoM" value="M" <?=($sexo === "M"? "checked" : "")?>>
                    <label for="sexoM">Masculino</label>
                    <input type="radio" name="sexo" id="sexoF" value = "F" <?=($sexo === "F"? "checked" : "")?>>
                    <label for="sexoF">Feminino</label>
               </fieldset>
               <label for="idade">Idade: </label>
               <input type="number" name="idade" id="idade" value="<?=$idade?>">
               <input type="submit" value="Calcular">
          </form>
     </main>

     <section>
          <h2>Resultado</h2>
          <?php 
               if ($sexo == "" || $nome == "" || $idade == 0) {
                    echo "<p><strong>Por favor, preencha o formulário acima.</strong></p>";
               } else {
                    if ($sexo === "M") {
                         $sexo = "Masculino";
                         if ($idade <= 15) {
                              echo "<p><strong>Nome:</strong> $nome</p>";
                              echo "<p><strong>Sexo:</strong> $sexo</p>";
                              echo "<p><strong>Idade:</strong> $idade</p>";
                              echo "<p><strong>Qtd. de remédio por dia:</strong> 2 por dia</p>";
                         } elseif ($idade > 15) {
                              echo "<p><strong>Nome:</strong> $nome</p>";
                              echo "<p><strong>Sexo:</strong> $sexo</p>";
                              echo "<p><strong>Idade:</strong> $idade</p>";
                              echo "<p><strong>Qtd. de remédio por dia:</strong> 4 por dia</p>";
                         }
                    } elseif ($sexo == "F") {
                         $sexo = "Feminino";
                         if($idade <= 25) {
                              echo "<p><strong>Nome:</strong> $nome</p>";
                              echo "<p><strong>Sexo:</strong> $sexo</p>";
                              echo "<p><strong>Idade:</strong> $idade</p>";
                              echo "<p><strong>Qtd. de remédio por dia:</strong> 1 por dia</p>";
                         } elseif ($idade <= 26 && $idade <= 35) {
                              echo "<p><strong>Nome:</strong> $nome</p>";
                              echo "<p><strong>Sexo:</strong> $sexo</p>";
                              echo "<p><strong>Idade:</strong> $idade</p>";
                              echo "<p><strong>Qtd. de remédio por dia:</strong> 4 por dia</p>";
                         } else {
                              echo "<p><strong>Nome:</strong> $nome</p>";
                              echo "<p><strong>Sexo:</strong> $sexo</p>";
                              echo "<p><strong>Idade:</strong> $idade</p>";
                              echo "<p><strong>Qtd. de remédio por dia:</strong> 8 por dia</p>";
                         }
                    }
               }
          ?>
     </section>
</body>
</html>