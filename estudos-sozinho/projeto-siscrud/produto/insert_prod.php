<?php 
    require_once "../conexao.php";

    $nome_prod = $_GET['nome_prod'] ?? '';
    $valor_prod = $_GET['valor_prod'] ?? '';
    $dt_valid_prod = $_GET['dt_valid_prod'] ?? '';

    $query = "INSERT INTO produto VALUES (0, '$nome_prod','$valor_prod','$dt_valid_prod') LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Produto <strong>$nome_prod</strong> adicionado com sucesso!</p>";
        echo "<a href='index.php'>Voltar para home</a>";
    } else {
        echo "deu ruim paizao";
        die();
    }
?>