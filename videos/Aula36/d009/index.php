<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 - Médias Aritméticas</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>
<body>
    <section>
        <?php 
            $valor1 = $_POST['valor1'] ?? 0;
            $peso1 = $_POST['peso1'] ?? 1;
            $valor2 = $_POST['valor2'] ?? 0;
            $peso2 = $_POST['peso2'] ?? 1;
            $mediaAritmetica = ($valor1 + $valor2) / 2;
            $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
        ?>

        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="idValor1" step="0.01" value="<?=$valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="idPeso1" step="0.01" value="<?=$peso1?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="idValor2" step="0.01" value="<?=$valor2?>">
            <label for="peso2">2° peso</label>
            <input type="number" name="peso2" id="idPeso2" step="0.01" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </section>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valores $valor1 e $valor2:";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaAritmetica, 2, ",", ".") . "</li></ul>";
            echo "<ul><li>A <strong>Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a " . number_format($mediaPonderada, 2, ",", ".") . "</li></ul>";
        ?>
    </section>
</body>
</html>