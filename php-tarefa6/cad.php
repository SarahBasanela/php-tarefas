<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'11-05-2026\'&@dataFinalCotacao=\'11-12-2026\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valor = $_POST["num"];
        $dolar = $valor / $cotacao;

        echo "Seus R\$ " . number_format($valor, 2, ",", ".") . "equivalem a US\$ " . number_format($dolar, 2, ",", ".");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>

</html>