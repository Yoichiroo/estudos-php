<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
        <th>Nivel</th>
        <th>Ativo</th>
        <th>Data Inserção</th>
        <th>Dados</th>
    </tr>

    <?php

    require_once "../conexao.php";

    $sql = "SELECT * FROM usuario";

    $sql = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>" . $dados['id'] . "</td>";
        echo "<td>" . $dados['nome_usu'] . "</td>";
        echo "<td>" . $dados['senha'] . "</td>";
        echo "<td>" . $dados['nivel'] . "</td>";
        echo "<td>" . $dados['ativo'] . "</td>";
        echo "<td>" . $dados['dt_cadastro'] . "</td>";
        echo "<td><a href='fedit_usu.php?id=".$dados['id']."'>Editar</a></td>";
        echo "<td><a href='remove_usu.php?id=".$dados['id']."'>Excluir</a></td>";
        echo "</tr>";
    }

    ?>
</table>