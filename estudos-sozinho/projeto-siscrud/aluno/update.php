<?php 
    require_once "../conexao.php";

    $nome_aluno = $_GET['nome_aluno'] ?? '';
    $nome_mae = $_GET['nome_mae'] ?? '';
    $nome_pai = $_GET['nome_pai'] ?? '';
    $dt_nasc = $_GET['dt_nasc'] ?? '';
    $sexo_aluno = $_GET['sexo_aluno'] ?? '';
    $rg_aluno = $_GET['rg_aluno'] ?? '';
    $cpf_aluno = $_GET['cpf_aluno'] ?? '';

    $query = "UPDATE aluno SET nome_aluno = '$nome_aluno', nome_mae = '$nome_mae', nome_pai = '$nome_pai', sexo_aluno = '$sexo_aluno', rg_aluno = '$rg_aluno', cpf_aluno = '$cpf_aluno', dt_nasc = '$dt_nasc' LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Aluno <strong>$nome_aluno</strong> editado com sucesso!</p>";
        echo "<a href='index.php'>Voltar para home</a>";
    } else {
        echo "deu ruim paizao";
        die();
    }
?>