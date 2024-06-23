<?php 
    require_once "../conexao.php";

    $nome_disc = $_GET['nome_disc'] ?? '';
    $sigla_disc = $_GET['sigla_disc'] ?? '';
    $ch_disc = $_GET['ch_disc'] ?? '';

    $query = "UPDATE disciplina SET nome_disc = '$nome_disc', sigla_disc = '$sigla_disc', ch_disc = '$ch_disc' LIMIT 1";

    $exec = mysqli_query($conexao, $query);

    if($exec) {
        echo "<p>Disciplina <strong>$nome_disc</strong> editada com sucesso!</p>";
        echo "<a href='index.php'>Voltar para home</a>";
    } else {
        echo "deu ruim paizao";
        die();
    }
?>