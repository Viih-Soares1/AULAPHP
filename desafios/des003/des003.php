<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado desafio três</title>
</head>
<body>
    <main>
    <?php 
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
       $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio .'\'&@dataFinalCotacao=\''.$fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
       $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
       
       $real = $_GET["real"] ?? 0;
       $dolar = $real / $cotacao;      


        $padrao = numfmt_create("pt-BR" , NumberFormatter::CURRENCY);
        echo "O valor digitado foi " . numfmt_format_currency($padrao, $real , "BRL").  "<p> Convertido em dolares ficam:". numfmt_format_currency($padrao, $dolar, "USD");

    ?>
    <button onclick="javascript:window.location.href='des003.html'"> Voltar </button>
    </main>
</body>
</html>
