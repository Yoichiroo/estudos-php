<div class="container">
    <div class="d-flex justify-content-between d-flex align-items-center">
        <h1>Alunos</h1>
        <div class="btn-group ">
            <a href="dashboard.php?page=add_alu.php" class="btn btn-success">Adicionar</a>
            <a href="base/relatorio/gerar_relatorio.php?tipo=alu" class="btn btn-primary">Gerar relatório</a>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Nome do Pai</th>
            <th>Nome da Mãe</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>RG</th>
            <th>CPF</th>
            <th colspan="3">Ações</th>
        </tr>
    
        <?php
    
        require_once "conexao.php";
    
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
            echo "<td><div class='btn-group'><a href='dashboard.php?page=fedit_alu.php&matricula=".$dados['matricula']."' class='btn btn-primary'>Editar</a>";
            echo "<a href='dashboard.php?page=remove.php&tipo=alu&matricula=".$dados['matricula']."' class='btn btn-danger'>Excluir</a></td>";
            echo "</tr>";
        }
    
        ?>
    </table>
</div>