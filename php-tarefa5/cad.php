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
        $cotacao = 5.17;
        $valor = $_POST["num"];
        $dolar = $valor / $cotacao;

        echo "Seus R\$ " . number_format($valor, 2, ",", ".") . "equivalem a US\$ " . number_format($dolar, 2, ",", ".");
        echo "<p>Cotação fixa de $</p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>

</html>