<?php 
    require_once "../conexao.php";

    $matricula = $_GET['matricula'] ?? '';
    $nome_func = $_GET['nome_func'] ?? '';
    $estado_civil = $_GET['estado_civil'] ?? '';
    $dt_nasc = $_GET['dt_nasc'] ?? '';
    $sexo_func = $_GET['sexo_func'] ?? '';
    $nac_func = $_GET['nac_func'] ?? '';
    $nat_func = $_GET['nat_func'] ?? '';
    $nome_pai = $_GET['nome_pai'] ?? '';
    $nome_mae = $_GET['nome_mae'] ?? '';
    $esc_func = $_GET['esc_func'] ?? '';
    $rg_func = $_GET['rg_func'] ?? '';
    $cpf_func = $_GET['cpf_func'] ?? '';

    $query = "UPDATE funcionario SET nome_func = '$nome_func', estado_civil = '$estado_civil', dt_nasc = '$dt_nasc', sexo_func = '$sexo_func', nac_func = '$nac_func', nat_func = '$nat_func', nome_pai = '$nome_pai', nome_mae = '$nome_mae', esc_func = '$esc_func', rg_func = '$rg_func',  cpf_func = '$cpf_func' LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Funcionário <strong>$nome_func</strong> editado com sucesso!</p>";
        echo "<a href='index.php'>Voltar para a home</a>";
    } else {
        echo "deu ruim";
        die();
    }

?>