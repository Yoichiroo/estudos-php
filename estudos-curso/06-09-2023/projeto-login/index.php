<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Login e Senha</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once "includes/abre_banco.php";
        require_once "includes/header.php";
    ?>
    <main>
        <img src="imagens/mao-1.png" alt="Página 1" class="direita">
        
        <h1>Página principal</h1>

        <p>Este é um exemplo de site com áreas protegidas com login e senha. Para ter acesso a algumas páginas, você deve estar logado. Esse tipo de acesso limitado é algo muito comum de encontar hoje em dia.</p>

        <p>Por exemplo, vamos acessar algumas páginas:</p>
        
        <ul>
            <li><a href="pag2.php">Página 2</a> - Permitida para todos.</li>
            <li><a href="pag3.php">Página 3</a> - Permitida apenas para usuários logados.</li>
            <li><a href="usuario-form.php">Cadastrar novo Usuário</a> - Apenas para usuários logados.</li>
        </ul>
    </main>
    <?php 
        require_once 'includes/fecha_banco.php';
    ?>
</body>
</html>