<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <main>
               <h1>Trabalhando com números aleatórios</h1>
               <p>Gerando um número aleatório entre 1 e 100...</p>
               <?php
                   $n = mt_rand(1, 100);
                   echo "<p>O valor gerado foi $n</p>"
               ?>
               <button onclick="javascript:document.location.reload()">Gerar Outro</button>
       </main>
</body>
</html>