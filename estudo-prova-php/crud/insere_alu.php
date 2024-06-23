<?php
    include_once "abrir_banco.php";
    $nome_alu = $_GET['nome_aluno'];
    $nome_pai = $_GET['nome_pai'];
    $nome_mae = $_GET['nome_mae'];
    $sexo = $_GET['sexo'];
    $rg = $_GET['rg'];
    $cpf = $_GET['cpf'];

    $query = "INSERT INTO alunos (nome_aluno, nome_pai, nome_mae, sexo, rg, cpf) VALUES ('$nome_alu', '$nome_pai', '$nome_mae', '$sexo', '$rg', '$cpf');";

    $execute_query = mysqli_query($conexao, $query);
    if($execute_query) {
        echo "<p>Aluno cadastrado com sucesso!</p>";
        include_once "index.php";
    } else {
        echo "<p>Deu ruim, ve ai</p>";
    }
?>