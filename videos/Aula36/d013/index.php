<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 - Caixa Eletrônico</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>
<body>
    <section>
        <?php 
            $valor = $_POST['valor'] ?? 0;
            $resto = $valor;
            $tot100 = floor($resto / 100);
            $resto %= 100;
            $tot50 = floor($resto / 50);
            $resto %= 50;
            $tot10 = floor($resto / 10);
            $resto %= 10;
            $tot5 = floor($resto / 5);
            $resto %= 5;
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$): </label>
            <input type="number" name="valor" id="idValor" step="5" required value="<?=$valor?>">
            <p style="font-size: 0.6em">Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </section>

    <section>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <li>100 x <?=$tot100?></li>
        <li>50 x <?=$tot50?></li>
        <li>10 x <?=$tot10?></li>
        <li>5 x <?=$tot5?></li>
    </section>
</body>
</html>