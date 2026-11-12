<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado de Processamento</h1>
    </header>
    <main>
      <?php 
        $n = $_GET['nome'] ?? "sem nome";
        $s = $_GET['sobrenome'] ?? "desconhecido";
        echo "<p>Olá, $n $s! Bem-vindo(a) ao nosso site.</p>";
      ?>
      <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>