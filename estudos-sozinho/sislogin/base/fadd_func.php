<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar usuário</title>
</head>
<body>
    <form action="base/add.php" method="get">
        <input type="hidden" name="tipo" value="func">
        <div class="row">
            <div class="col">
                <label for="matricula_func" class="form-label">Matrícula</label>
                <input type="text" name="matricula_func" id="matricula_func" class="form-control">
            </div>
            <div class="col">
                <label for="nome_func" class="form-label">Nome</label>
                <input type="text" name="nome_func" id="nome_func" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="estado_civil" class="form-label">Estado Civil</label>
                <input type="text" name="estado_civil_func" id="estado_civil" class="form-control">
            </div>

            <div class="col">
                <label for="dt_nasc" class="form-label">Data de Nascimento</label>
                <input type="date" name="dt_nasc" id="dt_nasc" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="sexo_func" class="form-label">Sexo</label>
                <input type="text" name="sexo_func" id="sexo_func" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="nac_func" class="form-label">Nacionalidade</label>
                <input type="text" name="nac_func" id="nac_func" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="nat_func" class="form-label">Naturalidade</label>
                <input type="text" name="nat_func" id="nat_func" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="nome_pai" class="form-label">Nome do Pai</label>
                <input type="text" name="nome_pai" id="nome_pai" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nome_mae" class="form-label">Nome da Mãe</label>
                <input type="text" name="nome_mae" id="nome_mae" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="esc_func" class="form-label">Escolaridade do Funcionário</label>
                <input type="text" name="esc_func" id="esc_func" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="rg_func" class="form-label">RG do Funcionário</label>
                <input type="text" name="rg_func" id="rg_func" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="cpf_func" class="form-label">CPF do Funcionário</label>
                <input type="text" name="cpf_func" id="cpf_func" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col"><input type="submit" value="Cadastrar" class="btn btn-primary"></div>
        </div>
    </form>
</body>
</html>