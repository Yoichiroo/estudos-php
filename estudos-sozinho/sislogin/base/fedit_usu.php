<?php 

    require_once "conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM usuario WHERE id = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>
    <form action="base/edit.php" method="get">
        <input type="hidden" name="tipo" value="usu">
        <input type="text" name="id" id="id" value="<?=$id?>" readonly class="form-control"> 
    
        <div class="row">
                <div class="col-md-6">
                    <label for="nome_usu" class="form-label">Nome</label>
                    <input type="text" name="nome_usu" id="nome_usu" class="form-control" value="<?=$dados['nome_usu']?>">
                    
                </div>
                <div class="col-md-6">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" name="senha" id="senha" class="form-control" value="<?=$dados['senha']?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="nivel" class="form-label">Nivel</label>
                    <input type="text" name="nivel" id="nivel" class="form-control" value="<?=$dados['nivel']?>">
                </div>
                
                <div class="col-md-6">
                    <label for="ativo" class="form-label">Ativo</label>
                    <input type="text" name="ativo" id="ativo" class="form-control" value="<?=$dados['ativo']?>"> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="dt_cad" class="form-label">Data de Cadastro</label>
                    <input type="date" name="dt_cad" id="dt_cad" class="form-control" value="<?=$dados['dt_cadastro']?>">
                </div>
            </div>

            <div class="row">
                <div class="col"><input type="submit" value="Editar" class="btn btn-primary"></div>
            </div>
    </form>
</main>