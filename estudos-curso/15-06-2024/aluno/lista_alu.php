<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Carga Horária</th>
        <th>Ações</th>
    </tr>

    <?php

    require_once "../conexao.php";

    $sql = "SELECT * FROM disciplina";

    $sql = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>" . $dados['id_disc'] . "</td>";
        echo "<td>" . $dados['nome_disc'] . "</td>";
        echo "<td>" . $dados['sigla_disc'] . "</td>";
        echo "<td>" . $dados['ch_disc'] . " horas</td>";
        echo "<td><a href='fedit_disc.php?id=".$dados['id_disc']."'>Editar</a></td>";
        echo "<td><a href='remove_disc.php?id=".$dados['id_disc']."'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>