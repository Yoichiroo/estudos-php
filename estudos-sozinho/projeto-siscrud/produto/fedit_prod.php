<?php 

    require_once "../conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM produto WHERE id_prod = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>
        <form action="update.php" method="get">
            <input type="text" name="id_prod" id="id_prod" value="<?=$id?>" readonly style="background-color: #d9d9d9"> <br><br>
            <label for="nome_prod">Nome:</label>
            <input type="text" name="nome_prod" id="nome_prod" value="<?=$dados['nome_prod']?>"> <br><br>
            
            <label for="valor_prod">Valor do produto (R$):</label>
            <input type="text" name="valor_prod" id="valor_prod" value="<?=$dados['valor_prod']?>"> <br><br>
            
            <label for="dt_valid_prod">Data de validade:</label>
            <input type="text" name="dt_valid_prod" id="dt_valid_prod" value="<?=$dados['dt_valid_prod']?>"><br><br>
            
            <input type="submit" value="Editar">
        </form>
</main>