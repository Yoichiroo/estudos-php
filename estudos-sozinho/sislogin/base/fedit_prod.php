<?php 

    require_once "conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM produto WHERE id_prod = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>

<main>

        <form action="base/edit.php" method="get">
            <input type="hidden" name="tipo" id="tipo" value="prod">
            <input type="text" name="id_prod" id="id_prod" value="<?=$id?>" readonly class="form-control"> 
            <div class="row">
                <div class="col-md-6">
                    <label for="nome_prod" class="form-label">Nome do produto</label>
                    <input type="text" name="nome_prod" id="nome_prod" class="form-control" value="<?=$dados['nome_prod']?>">
                </div>
                <div class="col-md-6">
                    <label for="valor_prod" class="form-label">Valor unitário (R$)</label>
                    <input type="text" name="valor_prod" id="valor_prod" class="form-control" value="<?=$dados['valor_prod']?>">
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <label for="dt_valid_prod" class="form-label">Data de validade</label>
                    <input type="date" name="dt_valid_prod" id="dt_valid_prod" class="form-control" value="<?=$dados['dt_valid_prod']?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col"><input type="submit" value="Editar" class="btn btn-primary"></div>
            </div>
        </form>
</main>