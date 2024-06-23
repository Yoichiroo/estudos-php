<?php 

    require_once "../conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM aluno WHERE matricula = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>
    <form action="update.php" method="get">
        <input type="text" name="matricula" id="matricula" value="<?=$id?>" readonly style="background-color: #d9d9d9"> <br><br>
        <label for="nome_aluno">Nome:</label>
        <input type="text" name="nome_aluno" id="nome_aluno" value="<?=$dados['nome_aluno']?>"> <br><br>
        
        <label for="nome_pai">Nome do Pai:</label>
        <input type="text" name="nome_pai" id="nome_pai" value="<?=$dados['nome_pai']?>"> <br><br>
        
        <label for="nome_mae">Nome da Mãe:</label>
        <input type="text" name="nome_mae" id="nome_mae" value="<?=$dados['nome_mae']?>"><br><br>

        <label for="dt_nasc">Data de Nascimento:</label>
        <input type="text" name="dt_nasc" id="dt_nasc" value="<?=$dados['dt_nasc']?>"><br><br>

        <label for="sexo_aluno">Sexo:</label>
        <input type="text" name="sexo_aluno" id="sexo_aluno" value="<?=$dados['sexo_aluno']?>"><br><br>

        <label for="rg_aluno">RG do Aluno:</label>
        <input type="text" name="rg_aluno" id="rg_aluno" value="<?=$dados['rg_aluno']?>"><br><br>

        <label for="cpf_aluno">CPF do Aluno:</label>
        <input type="text" name="cpf_aluno" id="cpf_aluno" value="<?=$dados['cpf_aluno']?>"><br><br>
        
        <input type="submit" value="Editar">
    </form>
</main>