<div class="container">
    <div class="d-flex justify-content-between d-flex align-items-center">
        <h1>Disciplinas</h1>
        <div class="btn-group ">
            <a href="dashboard.php?page=add_disc.php" class="btn btn-success">Adicionar</a>
            <a href="base/relatorio/gerar_relatorio.php?tipo=disc" class="btn btn-primary">Gerar relatório</a>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sigla</th>
            <th>Carga Horária</th>
            <th colspan="2">Ações</th>
        </tr>
    
        <?php
    
        require_once "conexao.php";
    
        $sql = "SELECT * FROM disciplina";
    
        $sql = mysqli_query($conexao, $sql);
    
        while ($dados = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>" . $dados['id_disc'] . "</td>";
            echo "<td>" . $dados['nome_disc'] . "</td>";
            echo "<td>" . $dados['sigla_disc'] . "</td>";
            echo "<td>" . $dados['ch_disc'] . " horas</td>";
            echo "<td><div class='btn-group'><a href='dashboard.php?page=fedit_disc.php&id=".$dados['id_disc']."' class='btn btn-primary'>Editar</a>";
            echo "<a href='dashboard.php?page=remove.php&tipo=disc&id=".$dados['id_disc']."' class='btn  btn-danger'>Excluir</a></div></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>