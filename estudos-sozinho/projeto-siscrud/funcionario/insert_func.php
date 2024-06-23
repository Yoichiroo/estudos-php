<?php 
    require_once "../conexao.php";

    $matricula = $_GET['matricula_func'] ?? '';
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

    $query = "INSERT INTO funcionario VALUES (0, '$matricula','$nome_func','$estado_civil','$dt_nasc','$sexo_func','$nac_func','$nat_func','$nome_pai','$nome_mae','$esc_func','$rg_func','$cpf_func') LIMIT 1";

    $cx = mysqli_query($conexao, $query);

    if($cx) {
        echo "Funcionário <strong>$nome_func</strong> adicionado com sucesso! <br>";
        echo "<a href='index.php'>Voltar para a home</a>";
    } else {
        echo "deu ruim";
        die();
    }
?>