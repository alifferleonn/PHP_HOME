<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da conversão</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["real"];
            $conversao = $real / 5.35;
            $conversao = number_format($conversao, 2, ',','.');
            echo "Seus R$$real equivalem a $$conversao</br>";
        ?>
        <a href="index.html">Fazer outra conversão</a>
    </main>
</body>
</html>