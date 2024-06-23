<?php 
    require_once "../conexao.php";

    $nome_prod = $_GET['nome_prod'] ?? '';
    $valor_prod = $_GET['valor_prod'] ?? '';
    $dt_valid_prod = $_GET['dt_valid_prod'] ?? '';

    $data = implode('-', array_reverse(explode('/', $dt_cadastro)));

    $query = "UPDATE produto SET nome_prod = '$nome_prod', valor_prod = '$valor_prod', dt_valid_prod = '$data' LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Produto <strong>$nome_prod</strong> editada com sucesso!</p>";
        echo "<a href='index.php'>Voltar para home</a>";
    } else {
        echo "deu ruim paizao";
        die();
    }
?>