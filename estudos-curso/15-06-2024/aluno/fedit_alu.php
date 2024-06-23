<?php 

    require_once "../conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM disciplina WHERE id_disc = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>
        <form action="update.php" method="get">
            <input type="text" name="id_disc" id="id_disc" value="<?=$id?>" readonly style="background-color: #d9d9d9"> <br><br>
            <label for="nome_disc">Nome:</label>
            <input type="text" name="nome_disc" id="nome_disc" value="<?=$dados['nome_disc']?>"> <br><br>
            
            <label for="sigla_disc">Sigla da disciplina:</label>
            <input type="text" name="sigla_disc" id="sigla_disc" value="<?=$dados['sigla_disc']?>"> <br><br>
            
            <label for="ch_disc">Carga Horária:</label>
            <input type="text" name="ch_disc" id="ch_disc" value="<?=$dados['ch_disc']?>"><br><br>
            
            <input type="submit" value="Editar">
        </form>
</main>