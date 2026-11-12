<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moeda</h1>
        <form action="cad.php" method="post">
            <label for="">Quantos R$ você tem na carteira?</label>
            <input type="number" name="num" id="idnum" step="0.05">
            <input type="submit" value="Converter">
        </form>
    </main>
</body>
</html>