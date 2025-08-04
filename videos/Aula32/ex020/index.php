<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 32 - Raízes de um número</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>

<body>
    <section>
        <?php
        $numero = $_POST['numero'] ?? 1;
        if (empty($_POST)) {
        } else {
            $raizQuadrada = sqrt($numero);
            $raizCubica = pow($numero, 1/3);
        }
        ?>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="numero">Número </label>
            <input type="number" name="numero" id="idNumero" step="0.001" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </section>
    <section>
        <h2>Resultado Final</h2>
        <?php
        if (empty($_POST)) {
            echo "Sem informações";
        } else {
            echo "Analisando o <strong>número $numero</strong>, temos: ";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($raizQuadrada, 3, ",", ".") . "</strong></li></ul>";
            echo "<ul><li>A sua raiz cúbica é <strong>" . number_format($raizCubica, 3, ",", ".") . "</strong></li></ul>";
        }
        ?>
    </section>
</body>

</html>