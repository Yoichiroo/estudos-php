<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar contato</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php require_once "includes/abre_banco.php"; ?>
    <main>
        <?php 
            $cod = $_POST["fcod"] ?? null;
            $nome = $_POST["fnome"] ?? "";
            $tel = $_POST["ftel"] ?? '';
            $endereco = $_POST["fend"] ?? '';
        
            // Pegando o nome do arquivo de img
            $foto_original = $_FILES["fimg"];
            $origem = $foto_original['tmp_name'];
            $nome_original = $foto_original['name'];
            
            if (empty($origem)) {
                $destino = '_semfoto.jpg';
            } else { 
                $extensao = substr($nome_original, strpos($nome_original, '.'), 4);
                $destino = "contato-$cod$extensao";
                move_uploaded_file($origem, __DIR__ . "/fotos-banco/" . $destino);
            }

            $sql =  "INSERT INTO `$tabela` (`cod_contato`, `nome`, `foto`, `telefone`, `endereco`) VALUES ('$cod', '$nome', '$destino','$tel', '$endereco') LIMIT 1";

            $query = $conexao -> prepare($sql);

            try {
                $conexao->beginTransaction();
                $query->execute();
                $conexao-> commit();
                echo "<p>O contato <strong>$nome</strong> foi adicionado com sucesso.</p>";
            } catch(Exception $e) {
                $conexao -> rollBack();
                throw $e;
                echo "<p>Não foi possível cadastrar um novo contato. Tente novamente.</p>";
            }
            
            // echo "$origem sera substituido por $destino";
        ?>
        <a href="index.php">&#x1F448; Voltar</a>
    </main>
    <?php require_once "includes/fecha_banco.php"; ?>
</body>
</html>