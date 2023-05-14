<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Teste de Vetores</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <?php 
          $estados = array(
               "AC"=>"Acre",
               "BA"=>"Bahia",
               "CE"=>"Ceará",
               "DF"=>"Distrito Federal",
               "ES"=>"Espírito Santo",
               "RJ"=>"Rio de Janeiro",
               "SP"=>"São Paulo"
          );
     ?>
     <main>
          <h1>Teste de Arrays</h1>
          <?php 
               foreach($estados as $sigla => $nome) {
                    echo "<p>O estado do <strong>$nome</strong> tem a sigla <strong>$sigla</strong></p>";
               }
          ?>
     </main>
</body>
</html>