<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar usuário</title>
</head>
<body>   
    <main>
        <form action="base/add.php" method="get">
        <input type="hidden" name="tipo" value="usu">
            <div class="row">
                <div class="col-md-6">
                    <label for="nome_usu" class="form-label">Nome</label>
                    <input type="text" name="nome_usu" id="nome_usu" class="form-control">
                    
                </div>
                <div class="col-md-6">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" name="senha" id="senha" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="nivel" class="form-label">Nivel</label>
                    <input type="text" name="nivel" id="nivel" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label for="ativo" class="form-label">Ativo</label>
                    <input type="text" name="ativo" id="ativo" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="dt_cad" class="form-label">Data de Cadastro</label>
                    <input type="date" name="dt_cad" id="dt_cad" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col"><input type="submit" value="Cadastrar" class="btn btn-primary"></div>
            </div>
        </form>
    </main>
</body>
</html>