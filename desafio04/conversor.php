<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da conversão</h1>
    </header>
    <main>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

             $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao  = $dados["value"][0]["cotacaoCompra"];


            $real = $_GET["real"];
            $conversao = $real / $cotacao;
            $conversao = number_format($conversao, 2, ',','.');
            echo "Seus R$$real equivalem a $$conversao</br>";
            $cotacao = number_format($cotacao, 2, ',','.');
            echo "Cotação dolar hoje R$ $cotacao";
        ?>
        <a href="index.html">Fazer outra conversão</a>
    </main>
</body>
</html>