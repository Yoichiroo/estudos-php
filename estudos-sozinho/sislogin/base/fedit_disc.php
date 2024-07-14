<?php 

    require_once "conexao.php";

    $id = $_REQUEST['id'] ?? "";

    $sql = "SELECT * FROM disciplina WHERE id_disc = $id ";

    $sql = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($sql);

?>
<div class="container">
        <form action="base/edit.php" method="get">
            <input type="hidden" name="tipo" value="disc">
            <input type="number" name="id_disc" id="id_disc" class="form-control" readonly value="<?=$id?>"> 
            <div class="row">
                <div class="col-md-4">
                    <label for="nome_disc" class="form-label">Nome</label>
                    <input type="text" name="nome_disc" id="nome_disc" class="form-control" value="<?=$dados['nome_disc']?>">
                </div>
                    <div class="col-md-4">
                        <label for="sigla_disc" class="form-label">Sigla da disciplina</label>
                        <input type="text" name="sigla_disc" id="sigla_disc" class="form-control" value="<?=$dados['sigla_disc']?>">
                    </div>
                    <div class="col-md-4">
                        <label for="ch_disc" class="form-label">Carga Horária</label>
                        <input type="text" name="ch_disc" id="ch_disc" class="form-control" value="<?=$dados['ch_disc']?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><input type="submit" value="Editar" class="btn btn-primary"></div>
            </div>
</div>