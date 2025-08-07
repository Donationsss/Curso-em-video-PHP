<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 28 - Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="../ex011/style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            if(empty($_GET['real'])) {
                echo "Sem informações <br><br>";
            } else {
                $real = $_GET['real'];
                $resultado = number_format($real / 5.6, 2 , ",", ".");
                echo "Seus R$ " . number_format($real, 2 , "," , ".") . " equivalem a <strong>US$ $resultado</strong> <br><br>";
                echo "<strong>Cotação fixa de R$5,60</strong> informada diretamente no código. <br><br>";
            }
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>