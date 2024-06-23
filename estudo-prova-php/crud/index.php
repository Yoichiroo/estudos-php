<?php 
    include_once "abrir_banco.php";

    $sql = "SELECT * FROM alunos";
    $query = mysqli_query($conexao, $sql);

    echo "<table border=1>";
    echo 
    "<tr>
        <th>Matricula</th>
        <th>Nome do Aluno</th>
        <th>Nome do Pai</th>
        <th>Nome da Mãe</th>
        <th>Sexo</th>
        <th>RG</th>
        <th>CPF</th>
        <th colspan=2>Ações</th>
    </tr>";
    if($query) {
        while($dados = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?=$dados['matricula']?></td>
        <td><?=$dados['nome_aluno']?></td>
        <td><?=$dados['nome_pai']?></td>
        <td><?=$dados['nome_mae']?></td>
        <td><?=$dados['sexo']?></td>
        <td><?=$dados['rg']?></td>
        <td><?=$dados['cpf']?></td>
        <td><a href="fedit_alu.php?matricula=<?=$dados['matricula']?>">Editar</a></td>
        <td><a href="excluir_alu.php?matricula=<?=$dados['matricula']?>">Excluir</a></td>
    </tr>
    
<?php      
        }        
    echo "</table><br><h1>Insira um aluno</h1>";
    include_once "fcad_alu.php";
    } else {
        echo "deu ruim";
    }
    mysqli_close($conexao);
?>