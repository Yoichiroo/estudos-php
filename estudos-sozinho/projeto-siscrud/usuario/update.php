<?php 
    require_once "../conexao.php";
    $id = $_GET['id'] ?? "";

    if(is_null($id)) {
        echo "<p>Paizao cade a referencia irmao</p>";
    } else {
        $nome_usu = $_GET['nome_usu'] ?? '';
        $senha = $_GET['senha'] ?? '';
        $ativo = $_GET['ativo'] ?? '';
        $nivel = $_GET['nivel'] ?? '';
        $dt_cadastro = $_GET['dt_cad'] ?? '';

        $data = implode('-', array_reverse(explode('/', $dt_cadastro)));

        $senha_decodificada = password_hash($senha, PASSWORD_DEFAULT);

        $query = "UPDATE usuario SET nome_usu = '$nome_usu', senha = '$senha_decodificada', ativo = '$ativo', nivel = '$nivel', dt_cadastro = " . ($data ? "'$data'" : "NULL") . " WHERE id = '$id'";

        $exec = mysqli_query($conexao, $query);

        if($exec) {
            echo "<p>Usuário $id - $nome_usu atualizado com sucesso!</p><br>";
            echo "<a href='index.php'>Voltar para a home</a>";
            die();
        } else {
            echo "deu ruim se vira ai";
        }
    }
?>