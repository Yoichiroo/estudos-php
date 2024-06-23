<?php 
    require_once "../conexao.php";

    $nome_aluno = $_GET['nome_aluno'] ?? '';
    $nome_pai = $_GET['nome_pai'] ?? '';
    $nome_mae = $_GET['nome_mae'] ?? '';
    $sexo_aluno = $_GET['sexo_aluno'] ?? '';
    $cpf_aluno = $_GET['cpf_aluno'] ?? '';
    $rg_aluno = $_GET['rg_aluno'] ?? '';
    $dt_nasc = $_GET['dt_nasc'] ?? '';

    $query = "INSERT INTO aluno VALUES (0, '$nome_aluno','$nome_pai','$nome_mae', '$dt_nasc', '$sexo_aluno', '$rg_aluno', '$cpf_aluno') LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Aluno <strong>$nome_aluno</strong> adicionado com sucesso!</p>";
        echo "<a href='index.php'>Voltar para home</a>";
    } else {
        echo "deu ruim paizao";
        die();
    }
?>