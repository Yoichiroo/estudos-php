<?php 
    require_once "../conexao.php";
    $id = $_GET['id'] ?? "";

    if(is_null($id)) {
        echo "<p>Paizao cade a referencia irmao</p>";
    } else {
        $query = "DELETE FROM disciplina WHERE id_disc = '$id' LIMIT 1";

        $exec = mysqli_query($conexao, $query);

        if($exec) {
            echo "<p>Disciplina excluída com sucesso!</p><br>";
            echo "<a href='index.php'>Voltar para a home</a>";
            die();
        } else {
            echo "deu ruim se vira ai";
        }
    }
?>