<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Array em inputs do tipo radio</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <?php 
                $itens = array("RJ", "SP", "MG", "ES");
                foreach($itens as $indice => $estado){
                    echo "<input type='radio' name='estado' id='$indice'>";
                    echo "<label for='$indice'> $estado</label><br>";
                }
            ?>
        </form>
    </main>
</body>
</html>