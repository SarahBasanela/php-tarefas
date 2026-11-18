<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Exercício UFC</title>
</head>
<body>
    <pre>
        <?php
        require_once "Lutador.php";

        $l1 = new Lutador("Tom", "Brasil", 30, 1.89, 87.7, 2, 1, 0);
        $l2 = new Lutador("Tiago", "Portugal", 26, 1.78, 79, 1, 0, 0);
        $l3 = new Lutador("João Paulo", "Espanha", 29, 1.96, 102.4, 2, 1, 1);

        
        $l1->ganharLuta();
        $l1->status();
        $l2->status();
        $l3->status();
        ?>
    </pre>
</body>
</html>