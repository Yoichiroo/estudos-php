<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar disciplina</title>
</head>
<body>   
    <div class="container">
        <form action="base/add.php" method="get">
            <input type="hidden" name="tipo" value="disc">
            <div class="row">
                <div class="col-md-4">
                    <label for="nome_disc" class="form-label">Nome</label>
                    <input type="text" name="nome_disc" id="nome_disc" class="form-control">
                </div>
                    <div class="col-md-4">
                        <label for="sigla_disc" class="form-label">Sigla da disciplina</label>
                        <input type="text" name="sigla_disc" id="sigla_disc" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="ch_disc" class="form-label">Carga Horária</label>
                        <input type="text" name="ch_disc" id="ch_disc" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><input type="submit" value="Cadastrar" class="btn btn-primary"></div>
            </div>
            
        </form>
    </div>
</body>
</html>