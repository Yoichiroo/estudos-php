<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Valor Unitário (R$)</th>
        <th>Data de validade</th>
        <th>Ações</th>
    </tr>

    <?php

    require_once "../conexao.php";

    $sql = "SELECT * FROM produto";

    $sql = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($sql)) {
        echo "<tr>";
        echo "<td>" . $dados['id_prod'] . "</td>";
        echo "<td>" . $dados['nome_prod'] . "</td>";
        echo "<td>" . number_format($dados['valor_prod'], 2, ",", ".") . "</td>";
        echo "<td>" . $dados['dt_valid_prod'] . "</td>";
        echo "<td><a href='fedit_prod.php?id=".$dados['id_prod']."'>Editar</a></td>";
        echo "<td><a href='remove_prod.php?id=".$dados['id_prod']."'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>
</table>