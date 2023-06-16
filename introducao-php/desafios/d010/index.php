<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano = date("Y");
        $anoNasc = $_REQUEST["anoNasc"] ?? 0000;
        $idadeAno = $_REQUEST["idadeAno"] ?? 0000;
    ?>
    <main>
        <h2>Calculando sua idade em PHP</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" value=<?=$anoNasc?>>
            <label for="idadeAno">Quer saber sua idade em que ano? <?="(Atualmente estamos em <strong>$ano</strong>)"?></label>
            <input type="number" name="idadeAno" id="idadeAno" value="<?=$idadeAno?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <?php if(!empty($idadeAno) & !empty($anoNasc)) { ?>
        <section>
            <h2>Resultado</h2>
            <?php 
                $calc = $idadeAno - $anoNasc;
                echo "Quem nasceu em $anoNasc vai ter <strong>$calc anos</strong> em $idadeAno!";
            ?>
        </section>
    <?php } ?>
    
</body>
</html>