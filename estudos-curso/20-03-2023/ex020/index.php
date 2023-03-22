<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Exercício PHP</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php 
          $num = $_REQUEST["num"] ?? 0;
          $nota50 = (int) $num / 50;
          $nota20 = (int) ($num % 50) / 20;
          $nota10 = (int) ($nota20 % 50) / 10;
          $nota5 = (int) ($nota10 % 50) / 5;          
     ?>
     <main>
          <h1>Simulador de Caixa Eletrônico</h1>
          <form action="<?=$_SERVER["PHP_SELF"]?>">
               <label for="num">Valor do saque (R$)</label>
               <input type="number" name="num" id="num" step="0.01" value="<?=$num?>">
               <input type="submit" value="Sacar">
          </form>
     </main>
     <section>
          <h2>Saque realizado</h2>
          <?php 
               echo "$num <br>"; // Valor (235)
               echo "$nota50 <br>"; // Qtd notas de 50 (4 notas)
               echo "$nota20 <br>"; // Qtd notas de 20 (1 notas)
               echo "$nota10 <br>"; // Qtd notas de 10 (0 notas)
               echo "$nota5"; // Qtd notas de 5 (0 notas)
          ?>
     </section>
</body>
</html>