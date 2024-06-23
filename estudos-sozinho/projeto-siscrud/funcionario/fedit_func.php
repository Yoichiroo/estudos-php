<?php 

    require_once "../conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM funcionario WHERE id_func = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>
    <form action="update.php" method="get">
        <input type="text" name="id" id="id" value="<?=$id?>" readonly style="background-color: #d9d9d9"> <br><br>
        
        <label for="matricula_func">Matrícula:</label>
        <input type="text" name="matricula_func" id="matricula_func" value="<?=$dados['matricula_func']?>"> <br><br>

        <label for="nome_func">Nome:</label>
        <input type="text" name="nome_func" id="nome_func" value="<?=$dados['nome_func']?>"> <br><br>
        
        <label for="estado_civil">Estado Civil:</label>
        <input type="text" name="estado_civil" id="estado_civil" value="<?=$dados['estado_civil']?>"> <br><br>
        
        <label for="dt_nasc">Data de Nascimento:</label>
        <input type="text" name="dt_nasc" id="dt_nasc" value="<?=$dados['dt_nasc']?>"><br><br>

        <label for="sexo_func">Sexo:</label>
        <input type="text" name="sexo_func" id="sexo_func" value="<?=$dados['sexo_func']?>"><br><br>

        <label for="nac_func">Nacionalidade:</label>
        <input type="text" name="nac_func" id="nac_func" value="<?=$dados['nac_func']?>"><br><br>

        <label for="nat_func">Naturalidade:</label>
        <input type="text" name="nat_func" id="nat_func" value="<?=$dados['nat_func']?>"><br><br>

        <label for="nome_pai">Nome do Pai:</label>
        <input type="text" name="nome_pai" id="nome_pai" value="<?=$dados['nome_pai']?>"><br><br>

        <label for="nome_mae">Nome da Mãe:</label>
        <input type="text" name="nome_mae" id="nome_mae" value="<?=$dados['nome_mae']?>"><br><br>

        <label for="esc_func">Escolaridade:</label>
        <input type="text" name="esc_func" id="esc_func" value="<?=$dados['esc_func']?>"><br><br>

        <label for="rg_func">RG:</label>
        <input type="text" name="rg_func" id="rg_func" value="<?=$dados['rg_func']?>"><br><br>

        <label for="cpf_func">CPF:</label>
        <input type="text" name="cpf_func" id="cpf_func" value="<?=$dados['cpf_func']?>"><br><br>
        
        <input type="submit" value="Editar">
    </form>
</main>