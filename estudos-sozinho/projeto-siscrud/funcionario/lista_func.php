<table>
    <tr>
        <th>ID</th>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Estado Civil</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Nacionalidade</th>
        <th>Naturalidade</th>
        <th>Nome do Pai</th>
        <th>Nome da Mãe</th>
        <th>Escolaridade</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Ações</th>
    </tr>

    <?php

    require_once "../conexao.php";

    $sql = "SELECT * FROM funcionario";

    $sql = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>" . $dados['id_func'] . "</td>";
        echo "<td>" . $dados['matricula_func'] . "</td>";
        echo "<td>" . $dados['nome_func'] . "</td>";
        echo "<td>" . $dados['estado_civil'] . "</td>";
        echo "<td>" . $dados['dt_nasc'] . "</td>";
        echo "<td>" . $dados['sexo_func'] . "</td>";
        echo "<td>" . $dados['nac_func'] . "</td>";
        echo "<td>" . $dados['nat_func'] . "</td>";
        echo "<td>" . $dados['nome_pai'] . "</td>";
        echo "<td>" . $dados['nome_mae'] . "</td>";
        echo "<td>" . $dados['esc_func'] . "</td>";
        echo "<td>" . $dados['rg_func'] . "</td>";
        echo "<td>" . $dados['cpf_func'] . "</td>";
        echo "<td><a href='fedit_func.php?id=".$dados['id_func']."'>Editar</a></td>";
        echo "<td><a href='remove_func.php?id=".$dados['id_func']."'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>