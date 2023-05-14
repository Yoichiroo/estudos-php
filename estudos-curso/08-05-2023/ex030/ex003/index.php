<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dados do Aluno</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <?php 
          $aluno = array(
               "nome"=>"Amanda",
               "curso"=>"Informática",
               "notas"=>[1=>3.5, 8, 5],
          );
     ?>
     <main>
          <h1>Dados do Aluno</h1>
          <pre>
               <?php 
                    echo "<li>O aluno se chama {$aluno['nome']}</li>";
                    echo "<li>Estuda no curso de {$aluno['curso']}</li>";
                    echo "<li>A primeira nota foi {$aluno['notas'][1]}</li>";
                    echo "<li>A segunda nota foi {$aluno['notas'][2]}</li>";
                    echo "<li>A terceira nota foi {$aluno['notas'][3]}</li>";
               ?>
          </pre>
     </main>
</body>
</html>