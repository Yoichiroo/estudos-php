<div class="container">
    <div class="d-flex justify-content-between d-flex align-items-center">
        <h1>Usuários</h1>
        <div class="btn-group ">
            <a href="dashboard.php?page=add_usu.php" class="btn btn-success">Adicionar</a>
            <a href="base/relatorio/gerar_relatorio.php?tipo=usu" class="btn btn-primary">Gerar relatório</a>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Nivel</th>
            <th>Ativo</th>
            <th>Data Inserção</th>
            <th colspan="3">Ações</th>
        </tr>
    
        <?php
    
        require_once "conexao.php";
    
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
            echo "<td><div class='btn-group'><a href='dashboard.php?page=fedit_usu.php&id=".$dados['id']."' class='btn btn-primary'>Editar</a>";
            echo "<a href='dashboard.php?page=remove.php&tipo=usu&id=".$dados['id']."' class='btn btn-danger'>Excluir</a></td>";
            echo "</tr>";
        }
    
        ?>
    </table>
</div>