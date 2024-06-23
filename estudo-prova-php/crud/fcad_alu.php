<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <form action="insere_alu.php" method="get">
        <label for="nome_aluno">Nome do Aluno</label>
        <input type="text" name="nome_aluno" id="nome_aluno">
        <label for="nome_pai">Nome do Pai</label>
        <input type="text" name="nome_pai" id="nome_pai">
        <label for="nome_mae">Nome da Mãe</label>
        <input type="text" name="nome_mae" id="nome_mae">
        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <label for="rg">RG</label>
        <input type="text" name="rg" id="rg">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">
    
        <input type="submit" value="Enviar">
    </form>
</body>
</html>