<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dados da Turma</title>
</head>
<body>
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
          $turma = array(
               1 => array("nome" => "William",
                         "idade" => 15,
                         "media" => 8.5
          ),
               2 => array("nome" => "Erick",
                          "idade" => 17,
                          "media" => 9.5,              
          ),
               3 => array("nome" => "Luiz Gustavo",
                          "idade" => 17,
                          "media" => 8.5         
          ),
               4 => array("nome" => "Maria Eduarda",
                         "idade" => 16,
                         "media" => 9.0   
          ),   
               5 => array("nome" => "Maria Rafaela",
                         "idade" => 15,
                         "media" => 7.5
          )
          );
     ?>
     <main>
          <h1>Dados da Turma</h1>
          <table>
               <tr>
                    <th>Num</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Média</th>
               </tr>
               <?php 
                    foreach($turma as $num => $aluno) {
                         //índice => valor
                         echo "<tr>";
                         echo "<td>$num</td>"; 
                         echo "<td>{$aluno['nome']}</td>"; 
                         echo "<td>{$aluno['idade']}</td>"; 
                         echo "<td>{$aluno['media']}</td>"; 
                    }
               ?>
          </table>
     </main>
</body>
</html>
</body>
</html>