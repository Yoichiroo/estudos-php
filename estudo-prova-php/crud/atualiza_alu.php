<?php
    include_once "abrir_banco.php";

    $matricula = $_GET['matricula'];
    $nome_alu = $_GET['nome_aluno'];
    $nome_pai = $_GET['nome_pai'];
    $nome_mae = $_GET['nome_mae'];
    $sexo = $_GET['sexo'];
    $rg = $_GET['rg'];
    $cpf = $_GET['cpf'];

    $sql_query = "UPDATE alunos SET nome_aluno = '$nome_alu', nome_pai = '$nome_pai', nome_mae = '$nome_mae', sexo = '$sexo', rg = '$rg', cpf = '$cpf' WHERE matricula = '$matricula';";

    $execute_query = mysqli_query($conexao, $sql_query);
    if($execute_query) {
        echo "<p>Aluno atualizado com sucesso</p>";
        include_once "index.php";
    } else {
        echo "<p>Deu ruim cria</p>";
    }
?>