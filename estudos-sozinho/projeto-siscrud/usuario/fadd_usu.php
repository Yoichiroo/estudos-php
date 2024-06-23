<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar usuário</title>
</head>
<body>   
    <main>
        <form action="insert_usu.php" method="get">
            <label for="nome_usu">Nome:</label>
            <input type="text" name="nome_usu" id="nome_usu"> <br><br>
            
            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="senha"> <br><br>
            
            <label for="nivel">Nivel:</label>
            <input type="text" name="nivel" id="nivel"><br><br>
            
            <label for="ativo">Ativo:</label>
            <input type="text" name="ativo" id="ativo"><br><br>
            
            <label for="dt_cad">Data Cadastro:</label>
            <input type="date" name="dt_cad" id="dt_cad"><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>