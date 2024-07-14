<?php 

    require_once "../conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM usuario WHERE id = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>
    <form action="update.php" method="get">
        <input type="text" name="id" id="id" readonly style="background-color: gray; color: white;" value="<?=$dados['id']?>"><br><br>
    
        <label for="nome_usu">Nome:</label>
        <input type="text" name="nome_usu" id="nome_usu" value="<?=$dados['nome_usu']?>"> <br><br>
        
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha" value="<?=$dados['senha']?>"> <br><br>
        
        <label for="nivel">Nivel:</label>
        <input type="text" name="nivel" id="nivel" value="<?=$dados['nivel']?>"><br><br>
        
        <label for="ativo">Ativo:</label>
        <input type="text" name="ativo" id="ativo" value="<?=$dados['ativo']?>"><br><br>
        
        <label for="dt_cad">Data Cadastro:</label>
        <input type="date" name="dt_cad" id="dt_cad" value="<?=$dados['dt_cadastro']?>"><br><br>

        <input type="submit" value="Atualizar" class="btn btn-primary">
    </form>
</main>