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
          $nomeAluno = $_REQUEST["nome"] ?? "";
          $qtdPontos = $_REQUEST["qtdPontos"] ?? 0;
          $turno = $_REQUEST["turno"] ?? "M";
     ?>
     <main>
          <h1>Status do aluno</h1>
          <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
               <label for="nome">Nome:</label>
               <input type="text" name="nome" id="nome" value="<?=$nomeAluno?>">
               <label for="qtdPontos">Quantidade de Pontos: </label>
               <input type="number" name="qtdPontos" id="qtdPontos" value="<?=$qtdPontos?>" step="0.01">
               <select name="turno" id="turno">
                    <option value="M" <?=($turno === "M")?"selected":""?>>Manhã</option>
                    <option value="T" <?=($turno === "T")?"selected":""?>>Tarde</option>
                    <option value="N" <?=($turno === "N")?"selected":""?>>Noite</option>
               </select>
               <input type="submit" value="Enviar">
          </form>
     </main>
     <section>
          <h2>Resultado</h2>
          <?php 
               if ($nomeAluno == "" || $qtdPontos == 0 || $turno == "") {
                    echo "<p><strong>Por favor, preencha o formulário acima.</strong></p>";
               } else {
                    if ($turno === "M" || $turno === "T") {
                         if($turno === "M") {
                              $turno = "Manhã";
                              if ($qtdPontos >= 100) {
                                   echo "<p>O aluno <strong>$nomeAluno</strong> do turno da <strong>$turno</strong> está <strong>APROVADO!</strong></p>";
                              } else {
                                   echo "<p>O aluno <strong>$nomeAluno</strong> do turno da <strong>$turno</strong> está <strong>REPROVADO!</strong></p>";
                              }
                         } elseif ($turno === "T") {
                              $turno = "Tarde";
                              if ($qtdPontos >= 100) {
                                   echo "<p>O aluno <strong>$nomeAluno</strong> do turno da <strong>$turno</strong> está <strong>APROVADO!</strong></p>";
                              } else {
                                   echo "<p>O aluno <strong>$nomeAluno</strong> do turno da <strong>$turno</strong> está <strong>REPROVADO!</strong></p>";
                              }
                         }
                    } elseif ($turno == "N") {
                         if ($qtdPontos >= 70) {
                              echo "<p>O aluno <strong>$nomeAluno</strong> do turno da <strong>Noite</strong> está <strong>APROVADO!</strong></p>";
                         } else {
                              echo "<p>O aluno <strong>$nomeAluno</strong> do turno da <strong>Noite</strong> está <strong>REPROVADO!</strong></p>";
                         }
                    }
               }
          ?>
     </section>
</body>
</html>