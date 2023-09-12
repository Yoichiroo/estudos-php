<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda em PHP</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once 'includes/abre_banco.php';

        $sql = $conexao -> prepare("SELECT * FROM $tabela ORDER BY nome ASC");
        $sql -> setFetchMode(PDO::FETCH_ASSOC);
        $sql -> execute();

        $total = $sql -> rowCount();
    ?>
    <main>
        <h1>Agenda em PHP</h1>
        
        <p>Exemplo de projeto que salva imagens em bancos de dados de maneira que não deixe a base MySQL pesada pelo uso de dados do tipo BLOB.</p>
        
        <p><a href="contato-incluir.php">&#x2795; Incluir novo contato</a></p>
        
        <table>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>&#x2699;</th>
            </tr>

            <?php while($dados = $sql -> fetch()) { ?>
                <tr>
                    <td><img src="fotos-banco/<?=$dados['foto']?>" alt="<?=$dados['nome']?>" class="miniatura"></td>
                    <td><?=$dados['nome']?></td>
                    <td><a href="contato-ver.php?ref=<?=$dados['cod_contato']?>">&#x1F441;</a></td>
                </tr>
            <?php } ?>

        </table>
    <?php require_once "includes/fecha_banco.php"; ?>
    </main>
</body>
</html>