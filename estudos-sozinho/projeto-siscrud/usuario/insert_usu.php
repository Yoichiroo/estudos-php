<?php 
    require_once "../conexao.php";

    $nome_usu = $_GET['nome_usu'] ?? '';
    $senha = $_GET['senha'] ?? '';
    $ativo = $_GET['ativo'] ?? '';
    $nivel = $_GET['nivel'] ?? '';
    $dt_cadastro = $_GET['dt_cad'] ?? '';

    $senha_decodificada = password_hash($senha, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuario VALUES (0,'$nome_usu','$senha_decodificada','$ativo','$nivel','$dt_cadastro') LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Usuário $nome_usu adicionado com sucesso!</p>";
        echo "<a href='index.php'>Voltar para home</a>";
    } else {
        echo "deu ruim paizao";
        die();
    }
?>