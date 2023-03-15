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
               $nota1 = $_REQUEST["nota1"];
               $nota2 = $_REQUEST["nota2"];
               $nota3 = $_REQUEST["nota3"];
               $etapas = 3;
               $mediaAnual = ($nota1 + $nota2 + $nota3) / $etapas;
               $materia = $_REQUEST["disc"];
               $meta = 6.00;
               echo "<h2> Suas notas: $nota1, $nota2, $nota3</h2>";
               echo "<p>Sua média anual em <strong>$materia</strong>: <strong>". number_format($mediaAnual, 2, ",", ".") ."</strong></p>";
               echo "<p> Status:";
               if ($mediaAnual >= 6) {
                    echo "<strong>APROVADO</strong></p>";
               } else {
                    echo "<strong>REPROVADO</strong></p>";
               };
          ?>
          <input type="button" value="Voltar" onclick="javascript:history.go(-1)">   
     </main>
</body>
</html>