<table>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Nome do Pai</th>
        <th>Nome da Mãe</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>RG do Aluno</th>
        <th>CPF do Aluno</th>
        <th>Ações</th>
    </tr>

    <?php

    require_once "../conexao.php";

    $sql = "SELECT * FROM aluno";   

    $sql = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>" . $dados['matricula'] . "</td>";
        echo "<td>" . $dados['nome_aluno'] . "</td>";
        echo "<td>" . $dados['nome_pai'] . "</td>";
        echo "<td>" . $dados['nome_mae'] . "</td>";
        echo "<td>" . $dados['dt_nasc'] . "</td>";
        echo "<td>" . $dados['sexo_aluno'] . "</td>";
        echo "<td>" . $dados['rg_aluno'] . "</td>";
        echo "<td>" . $dados['cpf_aluno'] . "</td>";
        echo "<td><a href='fedit_alu.php?id=".$dados['matricula']."'>Editar</a></td>";
        echo "<td><a href='remove_alu.php?id=".$dados['matricula']."'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>