<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 28 - Analisador de Número Real</title>
    <link rel="stylesheet" href="../ex011/style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $real = $_GET['real'] ?? "Sem informações <br><br>";

            echo "<p>Analisando o número <strong>" . number_format($real, 3, ",", ".") . "</strong> solicitado pelo usuário: </p>";
            
            $realInt = (int) $real;
            $realFrac = $real - $realInt;

            echo "<ul><li>A parte inteira do número é <strong>" . number_format($realInt, 0, ",", ".") . "</strong></li></ul>";
            echo "<ul><li>A parte inteira do número é <strong>" . number_format($realFrac, 3, ",", ".") . "</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html> 