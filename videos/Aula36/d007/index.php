<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 - Salário Mínimo</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>

<body>
    <section>
        <?php
        $salario = $_POST['salario'] ?? 0;
        $minimoAtual = 1518;
        $salarioMinimo = intdiv($salario, $minimoAtual);
        $resto = $salario % $minimoAtual;
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="salario">Salário (R$) </label>
            <input type="number" name="salario" id="idSalario" step="0.01" value="<?= $salario ?>" min="0">
            <p>Considerando o salário mínimo de <strong>R$1.518,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final</h2>
        <?php
        if (empty($_POST)) {
            echo "Sem informações";
        } else {
            echo "Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " ganha <strong>" . number_format($salarioMinimo, 0) . " salários mínimos</strong> + R$ " . number_format($resto, 2, ",", ".");
        }
        ?>
    </section>
</body>

</html>