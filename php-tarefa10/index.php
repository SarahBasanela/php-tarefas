<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['sal'];
        $salMin = 1200.00;
        $qtdsal = intdiv($salario, $salMin);
        $resto = $salario % $salMin;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="isal" step="0.05">
            <p>Considenrando o salário mínimo de <strong>€ <?=number_format($salMin, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de € <?=number_format($salario, 2, ",", ".")?> ganha <strong><?= $qtdsal ?> salários mínimos</strong> 
        + <?= number_format($resto, 2 ,",", ".") ?></p>
    </section>
</body>
</html>