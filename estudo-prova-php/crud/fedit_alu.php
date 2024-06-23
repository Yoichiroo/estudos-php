<?php 
    $matricula = (int)$_GET['matricula'] ?? "";
    include_once "abrir_banco.php";
    if(!$matricula) {
        echo "<p>Oh, deus, cadê a matrícula?</p>";
        mysqli_close($conexao);
    } else {
        $query = "SELECT * FROM alunos WHERE matricula = $matricula";
        $query_execute = mysqli_query($conexao, $query);
        $info = mysqli_fetch_array($query_execute);
    }
?>
<!DOCTYPE html>
<html lang=pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno <?=$info['matricula']?></title>
</head>
<body>
    <form action="atualiza_alu.php">
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula" value="<?=$info['matricula']?>" readonly>
        <label for="nome_aluno">Nome do Aluno</label>
        <input type="text" name="nome_aluno" id="nome_aluno" value="<?=$info['nome_aluno']?>">
        <label for="nome_pai">Nome do Pai</label>
        <input type="text" name="nome_pai" id="nome_pai" value="<?=$info['nome_pai']?>">
        <label for="nome_mae">Nome da Mãe</label>
        <input type="text" name="nome_mae" id="nome_mae" value="<?=$info['nome_mae']?>">
        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo">
            <option value='M' selected>Masculino</option>
            <?php 
                if($info['sexo'] == "M") {
                    echo "<option value='M' selected>Masculino</option>
                    <option value='F'>Feminino</option>";
                } else {
                    echo "<option value='F' selected>Feminino</option>
                    <option value='M'>Masculino</option>";
                }
            ?>
        </select>
        <label for="rg">RG</label>
        <input type="text" name="rg" id="rg" value="<?=$info['rg']?>">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?=$info['cpf']?>">
    
        <input type="submit" value="Editar">
    </form>
</body>
</html>