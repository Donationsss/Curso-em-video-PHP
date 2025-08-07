<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 - Reajustador de Preços</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>
<body>
    <section>
        <?php 
            $preco = $_POST['preco'] ?? 0;
            $reajuste = $_POST['reajuste'] ?? 0;
            $resultado = ($preco * $reajuste) / 100;
            $novoPreco = $preco + $resultado;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço do Produto (R$) </label>
            <input type="number" name="preco" id="idPreco" step="0.01" value="<?= $preco ?>">
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="idReajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
    </section>
    <section>
        <h2>Reajustador de Preços</h2>
        <?php 
            echo "O produto que custava R\$" . number_format($preco, 2, ",", ".") . ", com <strong>$reajuste de aumento</strong> vau passar a custar <strong>R\$" . number_format($novoPreco, 2, ",", ".") . "</strong> a partir de agora."
        ?>
    </section>

    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = reajuste.value
        }
    </script>
</body>
</html>