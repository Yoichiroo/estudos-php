<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once "includes/abre-banco.php";
        $ref = $_REQUEST['ref'] ?? '';
        if (empty($ref)) {
            echo "&#x274C; Erro na chamada.";
        } else {
            // echo "<p>O usuário solicitou alteração em $ref</p>";
            $sql = "SELECT * FROM veiculos WHERE renavam = '$ref' LIMIT 1";
            $busca = $conex->prepare($sql);
            $busca -> setFetchMode(PDO::FETCH_ASSOC);
            $busca -> execute();

            $total = $busca -> rowCount();
            if ($total <= 0) {
                echo "<p>&#x274C; O veículo $ref não foi encontrado.</p>";
            } else {
                $dados  = $busca->fetch();
    ?>
        <form action="update.php" method="get" onsubmit="return confirm('Confirma as alterações abaixo?')">
            <input type="hidden" name="ref" value="<?=$ref?>">

            <p><label for="formRenavam">RENAVAM</label></p>
            <input type="number" name="formRenavam" id="formRenavam" value="<?=$dados['renavam']?>" maxlength="11">

            <p><label for="formModelo">Modelo</label></p>
            <input type="text" name="formModelo" id="formModelo" value="<?=$dados['modelo']?>" maxlength="50">

            <p><label for="formMarca">Marca</label></p>
            <input type="text" name="formMarca" id="formMarca" value="<?=$dados['marca']?>" maxlength="50">

            <p><label for="formPreco">Preço</label></p>
            <input type="text" name="formPreco" id="formPreco" value="<?=$dados['preco']?>" step="0.01">

            <p><label for="formCor">Cor</label></p>
            <input type="text" name="formCor" id="formCor" value="<?=$dados['cor']?>" maxlength="50">

            <p><label for="formAnoFab">Ano de Fabricação</label></p>
            <input type="number" name="formAnoFab" id="formAnoFab" value="<?=$dados['anofab']?>" min='1991'>

            <p><input type="submit" value="Alterar" class="btn"></p>
        </form>
    <?php      
            }
        }

        echo "<p><a href='index.php' class='btn'>Voltar</a></p>";
        require_once 'includes/fecha-banco.php';
    ?>
</body>
</html>