<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Resultado Final</h1>
        <?php
        if (empty($_GET['numero'])) {
            echo "Sem informações <br><br>";
        } else {
            $num = $_GET['numero'];
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo "O número escolhido foi <strong>$num</strong> <br>";
            echo "O seu antecessor é <strong>$antecessor</strong> <br>";
            echo "O seu sucessor é <strong>$sucessor</strong> <br><br>";
        }
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="← Voltar"></a>
    </section>
</body>
</html>