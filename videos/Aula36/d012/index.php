<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 - Calculadora de Tempo</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>
<body>
    <section>
        <?php 
            $totalSegundos = $_POST['segundo'] ?? 0;
            $sobra = $totalSegundos;
            $semana = (int)($sobra / 604800);
            $sobra = $sobra % 604800;
            $dia = (int)($sobra / 86400);
            $sobra = $sobra % 86400;
            $hora = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            $segundo = $sobra;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="segundo">Qual é o total de segundos?</label>
            <input type="number" name="segundo" id="idSegundo" value="<?=$totalSegundos?>">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            echo "Analisando o valor que você digitou, <strong>$totalSegundos segundos</strong> equivalem a um total de:";
            echo "<ul><li>$semana semanas</li></ul>";
            echo "<ul><li>$dia dias</li></ul>";
            echo "<ul><li>$hora horas</li></ul>";
            echo "<ul><li>$minuto minutos</li></ul>";
            echo "<ul><li>$segundo segundos</li></ul>";
        ?>
    </section>
</body>
</html>