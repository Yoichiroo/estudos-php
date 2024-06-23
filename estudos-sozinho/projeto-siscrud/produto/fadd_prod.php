<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar disciplina</title>
</head>
<body>   
    <main>
        <form action="insert_prod.php" method="get">
            <label for="nome_prod">Nome do produto:</label>
            <input type="text" name="nome_prod" id="nome_prod"> <br><br>
            
            <label for="valor_prod">Valor unitário (R$):</label>
            <input type="text" name="valor_prod" id="valor_prod"> <br><br>
            
            <label for="dt_valid_prod">Data de validade:</label>
            <input type="date" name="dt_valid_prod" id="dt_valid_prod"><br><br>
            
            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>