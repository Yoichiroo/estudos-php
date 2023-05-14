<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Array</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <?php 
          $alunos = array("A"=>"Madu","B"=>"Osiris","C"=> "Tucano", "D"=>"Will","E"=> "Erick", "F"=>"Yuri");
          ?>
     <main>
          <h1>Trabalhando com Arrays</h1>

               <?php
                    $alunos["G"] = "Fabiano";
                    unset($alunos["C"]);
                    // var_dump($alunos);
                    foreach($alunos as $pos => $valor) {
                         echo "<p>O aluno <strong>$pos</strong> se chama <strong>$valor</strong></p>";
                    }
               ?>

     </main>
</body>
</html>