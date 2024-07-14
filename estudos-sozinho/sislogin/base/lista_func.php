<div class="container ">
    <div class="d-flex justify-content-between d-flex align-items-center">
        <h1>Funcionários</h1>
        <div class="btn-group d-flex justify-content-center ">
            <a href="dashboard.php?page=add_func.php" class="btn btn-success">Adicionar</a>
            <a href="base/relatorio/gerar_relatorio.php?tipo=func" class="btn btn-primary">Gerar relatório</a>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Nacionalidade</th>
            <th>Naturalidade</th>
            <th>RG</th>
            <th>CPF</th>
            <th colspan="2">Ações</th>
        </tr>
    
        <?php
    
        require_once "conexao.php";
    
        $sql = "SELECT * FROM funcionario";
    
        $sql = mysqli_query($conexao, $sql);
    
        while ($dados = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>" . $dados['id_func'] . "</td>";
            echo "<td>" . $dados['matricula_func'] . "</td>";
            echo "<td>" . $dados['nome_func'] . "</td>";
            echo "<td>" . $dados['dt_nasc_func'] . "</td>";
            echo "<td>" . $dados['sexo_func'] . "</td>";
            echo "<td>" . $dados['nac_func'] . "</td>";
            echo "<td>" . $dados['nat_func'] . "</td>";
            echo "<td>" . $dados['rg_func'] . "</td>";
            echo "<td>" . $dados['cpf_func'] . "</td>";
            
            echo "<td><div class='btn-group'><a href='dashboard.php?page=fedit_func.php&id=".$dados['id_func']."' class='btn btn-primary'>Editar</a>";
            echo "<a href='dashboard.php?page=remove.php&tipo=func&id=".$dados['id_func']."' class='btn  btn-danger'>Excluir</a></div></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>