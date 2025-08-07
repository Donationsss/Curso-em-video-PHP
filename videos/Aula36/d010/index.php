<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 36 - Cálculo de Idade</title>
    <link rel="stylesheet" href="../ex018/style.css">
</head>
<body>
    <section>
        <?php 
            $nascimento = $_POST['nascimento'] ?? 0;
            $ano = $_POST['ano'] ?? 0;
            $idade = $ano - $nascimento;
        ?>
        <h1>Calculando a Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nascimento">Em que ano você nasceu? </label>
            <input type="number" name="nascimento" id="idNascimento" value="<?=$nascimento?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <?php $anoAtual = date('Y'); echo $anoAtual?>);</label>
            <input type="number" name="ano" id="idAno" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </section>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano";
        ?>
    </section>
</body>
</html>