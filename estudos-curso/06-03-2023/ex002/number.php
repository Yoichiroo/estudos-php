<!DOCTYPE html>
<html lang="en">
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
               $num = $_REQUEST["num"] ?? 0;
               $ter = 3;
               $resultado = $num / $ter;
               echo "<p>Número digitado: <strong>" . number_format($num, 2) . "<strong></p>";
               echo "<p>A terça parte é: <strong>". number_format($resultado, 2) . "</strong></p>"
          ?>
          <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
     </main>
</body>
</html>