<div class="container">
    <div class="d-flex justify-content-between d-flex align-items-center">
        <h1>Produtos</h1>
        <div class="btn-group ">
            <a href="dashboard.php?page=add_prod.php" class="btn btn-success">Adicionar</a>
            <a href="base/relatorio/gerar_relatorio.php?tipo=prod" class="btn btn-primary">Gerar relatório</a>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Valor Unitário (R$)</th>
            <th>Data de validade</th>
            <th colspan="2">Ações</th>
        </tr>
    
        <?php
    
        require_once "conexao.php";
    
        $sql = "SELECT * FROM produto";
    
        $sql = mysqli_query($conexao, $sql);
    
        while ($dados = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>" . $dados['id_prod'] . "</td>";
            echo "<td>" . $dados['nome_prod'] . "</td>";
            echo "<td>" . number_format($dados['valor_prod'], 2, ",", ".") . "</td>";
            echo "<td>" . $dados['dt_valid_prod'] . "</td>";
            echo "<td><div class='btn-group'><a href='dashboard.php?page=fedit_prod.php&id=".$dados['id_prod']."' class='btn btn-primary'>Editar</a>";
            echo "<a href='dashboard.php?page=remove.php&tipo=prod&id=".$dados['id_prod']."' class='btn  btn-danger'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>