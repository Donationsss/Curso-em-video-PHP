<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 24 - Analisador de Número Real</title>
    <link rel="stylesheet" href="../ex011/style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $real = $_GET['real'] ?? "Sem informações";
            echo "Analisando o número <strong>". number_format($real, 3, ",", ".") . "</strong> informado pelo usuário: ";
            
        ?>
    </section>
</body>
</html>