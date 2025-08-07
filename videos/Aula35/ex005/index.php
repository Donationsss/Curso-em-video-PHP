<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 35 - Formulário Retroalimentado</title>
    <link rel="stylesheet" href="../../Aula19/ex007/style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;

    ?>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="idvalor1" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="idvalor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </section>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            if(empty($_GET)) {
                echo "Sem informações";
            } else {
                $resultado = $valor1 + $valor2;
                echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $resultado.</strong></p>";
            }
        ?>
    </section>
</body>
</html>