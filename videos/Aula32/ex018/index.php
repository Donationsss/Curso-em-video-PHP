<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 32 - Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        if (empty($_GET)) {
        } else {
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
        }
        ?>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idDividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idDivisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </section>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
        if (empty($_GET)) {
            echo "Sem informações";
        } else {
            echo "Dividendo: $dividendo<br><br>";
            echo "Divisor: $divisor<br><br>";
            echo "Resto: $resto<br><br>";
            echo "Resultado: $resultado<br><br>";
        }

        ?>
    </section>
</body>

</html>