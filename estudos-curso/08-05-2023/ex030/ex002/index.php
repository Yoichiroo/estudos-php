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
          <h1>Teste de Valores</h1>
          <form action="" method="post">
               <label for="estado">Estado</label>
               <select name="estado" id="estado">
                    <?php
                         foreach($estados as $sigla => $nome) {
                              echo "<option value='$sigla'>$nome</option>";
                         } 
                    ?>
               </select>
          </form>
     </main>
</body>
</html>