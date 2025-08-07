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
        if (empty($_GET['real'])) {
            echo "Sem informações <br><br>";
        } else {
            $real = $_GET['real'];
            $inicio = date('m/d/Y', strtotime("-7 days"));
            $fim = date('m/d/Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $resultado = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $resultado, "USD") . "</strong> <br><br>";
            echo "<strong>Cotação fixa de ". numfmt_format_currency($padrao, $cotacao, "USD") ."</strong> informada diretamente no código. <br><br>";
        }
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>