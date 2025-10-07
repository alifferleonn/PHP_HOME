<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteador de número de 1 a 100</h1>
    </header>
    <main>
        <h1>Sorteador de números aleatórios</h1>
        <p>Gerando um número aleatório de 1 a 100...</p>
        <?php 
            $valor_minimo = 1;
            $valor_maximo = 100;
            $valor_sorteado = mt_rand($valor_minimo, $valor_maximo);
            echo "Valor gerado foi: $valor_sorteado </br>";
        ?>
       <a href="index.php">Gerar outro valor</a>
    </main>
</body>
</html>