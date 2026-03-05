<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos Servidor</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>
             
        <form action="conversao.php" method="get">
            <label for="numero">Quantos R$ você tem na carteira?</label>
            <input type="number" name="din" id="numero" step="0.01">
            <input type="submit" value="Converter">
        </form>

    </main>
</body>
</html>
