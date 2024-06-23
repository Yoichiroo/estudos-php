<?php
    include_once "abrir_banco.php";
    $matricula = $_GET['matricula'] ?? "";

    if(!$matricula) {
        echo "<p>Oh, deus, cadê a matrícula?</p>";
        mysqli_close($conexao);
    } else {
        $sql_query = "DELETE FROM alunos WHERE matricula = '$matricula' LIMIT 1;";
        $execute_query = mysqli_query($conexao, $sql_query);
        if($execute_query) {
            echo "<p>Aluno excluído com sucesso.</p>";
            include_once "index.php";   
        } else {
            echo "<p>Não foi possível </p>";        
        }
    }
?>