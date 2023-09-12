<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização do Contato</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once "includes/abre_banco.php"; 
        $ref = $_REQUEST["ref"] ?? null;
    ?>
    <main>
        <?php if(is_null($ref)) { 
                echo "<p>Não é possível mostrar dados do contato selecionado.</p>"; 
            } else {
                $sql = "SELECT * FROM $tabela WHERE cod_contato = '$ref' LIMIT 1";
                $query = $conexao -> prepare($sql);
                $query -> setFetchMode(PDO::FETCH_ASSOC);
                $query -> execute();
                $total = $query -> rowCount();
                if ($total == 0) {
                    echo "<p><strong>Contato não encontrado no banco.</strong></p>";
                } else {
                    $dados = $query -> fetch(); ?>
                    <h1><?=$dados['nome']?></h1>
                    <img src="fotos-banco/<?=$dados['foto']?>" class="normal">
                    <p>&#x260E; Telefone: <strong><?=$dados['telefone']?></strong></p>
                    <p>&#x1F4CD; Endereço: <strong><?=$dados['endereco']?></strong></p>
        <?php }
            } 
        ?>
        <a href="index.php">&#x1F448; Voltar</a>
    </main>
    <?php require_once "includes/fecha_banco.php"; ?>
</body>
</html>