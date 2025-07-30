<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 24 - Trabalhando com números aleatórios</title>
    <link rel="stylesheet" href="../ex011/style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $aleatorio = mt_rand(0, 100);
            echo "Gerando um número aleatório entre 0 e 100... <br>";
            echo "O valor gerado foi <strong>$aleatorio</strong> <br><br>";
            
        ?>
        <a href="javascript:history.go(0)"><input type="button" value="🔁 Gerar outro"></a>
    </section>
</body>
</html>