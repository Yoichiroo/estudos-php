<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir novo contato</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once "includes/abre_banco.php";
    ?>
    <main>
        <?php 
            $sql = "SELECT max(cod_contato) as ultimo FROM $tabela";
            $query = $conexao -> prepare($sql);
            $query -> setFetchMode(PDO::FETCH_ASSOC);
            $query -> execute();
            $dados = $query -> fetch();

            $prox_cod = $dados['ultimo'] + 1;
        ?>
        <h1>Incluir novo contato</h1>
        <form action="contato-salvar.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="fcod">Código</label>
                <input type="number" name="fcod" id="fcod" readonly value = <?=$prox_cod?>>
            </div>
            <div>
                <label for="fnome">Nome completo</label>
                <input type="text" name="fnome" id="fnome" maxlength="30">
            </div>

            <div>
                <label for="fimg">Foto</label>
                <input type="file" name="fimg" id="fimg">
            </div>

            <div>
                <label for="ftel">Telefone</label>
                <input type="text" name="ftel" id="ftel">
            </div>

            <div>
                <label for="fend">Endereço</label>
                <textarea name="fend" id="fend" cols="40" rows="2"></textarea>
            </div>

            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
        <a href="index.php">&#x1F448; Voltar</a>
    </main>
    <?php 
        require_once "includes/fecha_banco.php";
    ?>
</body>
</html>