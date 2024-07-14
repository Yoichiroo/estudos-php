<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar disciplina</title>
</head>
<body>   
    <main>
        <form action="base/add.php" method="get">
            <input type="hidden" name="tipo" value="prod">
            <div class="row">
                <div class="col-md-6">
                    <label for="nome_prod" class="form-label">Nome do produto</label>
                    <input type="text" name="nome_prod" id="nome_prod" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="valor_prod" class="form-label">Valor unitário (R$)</label>
                    <input type="text" name="valor_prod" id="valor_prod" class="form-control">
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <label for="dt_valid_prod" class="form-label">Data de validade</label>
                    <input type="date" name="dt_valid_prod" id="dt_valid_prod" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col"><input type="submit" value="Cadastrar" class="btn btn-primary"></div>
            </div>
        </form>
    </main>
</body>
</html>