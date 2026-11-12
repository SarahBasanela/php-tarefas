<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 Raiz Quadrada e Cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 1;
        $r2 = sqrt($num);
        $r3 = pow($num, 1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="inum" value="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "<p>Analisando o <strong>número <?= $num ?></strong>, temos:</p>";
        echo "<ul><li>A sua raiz quadrada é " . number_format($r2, 2, ",", ".") ." </li></ul>";
        echo "<ul><li>A sua raiz cúbica é " . number_format($r3, 2, ",", ".") ." </li></ul>";       
        ?>
    </section>
</body>
</html>