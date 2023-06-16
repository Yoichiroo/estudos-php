<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_REQUEST["total"] ?? 00;
        // 1 min = 60 segundos
        // 1 hora = 3.600 segundos
        // 1 dia = 24 horas = 1.440 minutos = 86.400 segundos
        //  1 semana = 7 dias = 168 horas = 10800 minutos = 604.800 segundos

        // ex: 2.000.000 segundos
        // em semanas = 2.000.000 / 604.800 = 3 semanas = 185.600
        // em dias =  185.600 / 86.400 = 2 dias = 12.800
        // em horas 12.800 / 3.600 = 3 horas = 3.000
        // em minutos / segundos = 2.000 / 60 = 33 minutos e 20 segundos
    ?>
    <main>
    <h2>Calculando tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?=$total?>">
            <input type="submit" value="Analisar o tempo">
        </form>
    </main>
    <section>
        <?php
            // Total do usuário
            $sobra = $total;

            // Cálculo de semanas
            $semana = (int)($sobra / 604800);
            $sobra = $sobra % 604800;

            // Cálculo de dias
            $dias = (int) ($sobra / 86400);
            $sobra = $sobra % 86400;

            // Cálculo de horas
            $horas = (int)($sobra / 3600);
            $sobra = $sobra % 3600;

            // Cálculo de minutos
            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;

            // Cálculo de segundos
            $segundo = $sobra;
            
            ?>
        <h2>Resultado</h2>
        <?="<p>Analisando o valor que digitaste, <strong>" . number_format($total, 0, ",", ".") ." segundos</strong> equivalem a:</p>"?>
        <ul>
            <li><?="$semana semanas;"?></li>
            <li><?="$dias dias;"?></li>
            <li><?="$horas horas;"?></li>
            <li><?="$minutos minutos;"?></li>
            <li><?="$segundo segundos;"?></li>
        </ul>
    </section>
</body>
</html>