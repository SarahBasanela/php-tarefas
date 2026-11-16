<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 POO</title>
</head>
<body>
    <?php 
        require_once "Conta.php";

        $c1 = new Conta();
        $c1->abrirConta("CC");
        $c1->setDono("Creuza");

        $c2 = new Conta();
        $c2->abrirConta("CP");
        $c2->setDono("Jubileu");

        echo "Saldo daconta da {$c1->getDono()} é de {$c1->getSaldo()} e o saldo conta do {$c2->getDono()} é de {$c2->getSaldo()}";

        //print_r($c1);
        //print_r($c2);
    ?>
</body>
</html>