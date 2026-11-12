<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $dividendo = (int) ($_GET['dividendo'] ?? 0);
        $divisor   = (int) ($_GET['divisor'] ?? 1);
        if ($divisor == 0) {
            $divisor = 1; // evita o erro de divisão por zero
        }

        $quociente = intdiv($dividendo, $divisor); // divisão inteira
        $resto     = $dividendo % $divisor;        // resto da divisão
    ?>
    <main>
        <h1>Anatonima de uma Divisão</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>

</html>