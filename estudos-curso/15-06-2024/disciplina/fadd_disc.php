<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar disciplina</title>
</head>
<body>   
    <main>
        <form action="insert_disc.php" method="get">
            <label for="nome_disc">Nome:</label>
            <input type="text" name="nome_disc" id="nome_disc"> <br><br>
            
            <label for="sigla_disc">Sigla da disciplina:</label>
            <input type="text" name="sigla_disc" id="sigla_disc"> <br><br>
            
            <label for="ch_disc">Carga Horária:</label>
            <input type="text" name="ch_disc" id="ch_disc"><br><br>
            
            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>