<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar aluno</title>
</head>
<?php 

    require_once "conexao.php";

    $matricula = $_REQUEST['matricula'] ?? "";

    $sql = "SELECT * FROM aluno WHERE matricula = $matricula ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<body>   
    <main>
        <form action="base/edit.php" method="get">
        <input type="hidden" name="tipo" value="alu">
        <input type="number" name="matricula" id="matricula" class="form-control" readonly value="<?=$dados['matricula']?>">
            <div class="row">
                <div class="col-md-4">
                    <label for="nome_aluno" class="form-label">Nome do Aluno</label>
                    <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" value="<?=$dados['nome_aluno']?>">                  
                </div>
                <div class="col-md-4">
                    <label for="nome_pai" class="form-label">Nome do Pai</label>
                    <input type="text" name="nome_pai" id="nome_pai" class="form-control" value="<?=$dados['nome_pai']?>"> 
                </div>
                <div class="col-md-4">
                    <label for="nome_mae" class="form-label">Nome da Mãe</label>
                    <input type="text" name="nome_mae" id="nome_mae" class="form-control" value="<?=$dados['nome_mae']?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="dt_nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" name="dt_nasc" id="dt_nasc" class="form-control" value="<?=$dados['dt_nasc']?>">
                </div>
                <div class="col-md-6">
                    <label for="sexo_aluno" class="form-label">Sexo do Aluno</label>
                    <input type="text" name="sexo_aluno" id="sexo_aluno" class="form-control" value="<?=$dados['sexo_aluno']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="cpf_aluno" class="form-label">CPF do Aluno</label>
                    <input type="text" name="cpf_aluno" id="cpf_aluno" class="form-control" value="<?=$dados['cpf_aluno']?>">
                </div>
                <div class="col-md-6">
                    <label for="rg_aluno" class="form-label">RG do Aluno</label>
                    <input type="text" name="rg_aluno" id="rg_aluno" class="form-control" value="<?=$dados['rg_aluno']?>">
                </div>
            </div>

            <div class="row">
                <div class="col"><input type="submit" value="Cadastrar" class="btn btn-primary"></div>
            </div>
        </form>
    </main>
</body>
</html>