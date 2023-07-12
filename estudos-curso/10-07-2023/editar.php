<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once "includes/abre-banco.php";
        $ref = $_REQUEST['ref'] ?? '';

        if(empty($ref)) {
            echo "<p>&#x274C; Erro na chamada.</p>";
        } else {
            //echo "<p>Usuário solicitou alteração em $ref.</p>";
            $sql = "SELECT * FROM veiculos WHERE renavam = '$ref' LIMIT 1";

            $busca = $conex->prepare($sql);
            $busca->setFetchMode(PDO::FETCH_ASSOC);
            $busca->execute();
            $total = $busca->rowCount();

            if ($total <= 0) {
                echo "<p>&#x274C; Veículo $ref não encontrado</p>";
            } else {
                $dados = $busca->fetch();
                ?>
                    <form action="update.php" method="get" onsubmit="return confirm('Confirma as alterações no veículo?')">
                        <input type="hidden" name="ref" value="<?=$ref?>">

                        <p><label for="fren">RENAVAM</label>
                        <input type="number" name="fren" id="fren" value="<?=$dados['renavam']?>"></p>

                        <p><label for="fmod">Modelo</label>
                        <input type="text" name="fmod" id="fmod" value="<?=$dados['modelo']?>" maxlength="30"></p>

                        <p><label for="fmar">Marca</label>
                        <input type="text" name="fmar" id="fmar" value="<?=$dados['marca']?>" maxlength="20"></p>

                        <p><label for="fano">Fabricação</label>
                        <input type="number" name="fano" id="fano" value="<?=$dados['anofab']?>" min="1991"></p>

                        <p><label for="fcor">Cor</label>
                        <input type="text" name="fcor" id="fcor" value="<?=$dados['cor']?>" maxlength="15"></p>

                        <p><label for="fpre">Preço (R$)</label>
                        <input type="number" name="fpre" id="fpre" value="<?=$dados['preco']?>" step="0.01"></p>

                        <p><input type="submit" value="Alterar"></p>
                    </form>
                <?php
            } // Fim do if ($total <= 0)
        } // Fim do if (empty($ref))

        echo "<p><a href='index.php' class='btn'>Voltar</a></p>";
        require_once "includes/fecha-banco.php";
    ?>
</body>
</html>


