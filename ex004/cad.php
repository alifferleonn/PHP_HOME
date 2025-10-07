<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo "Seja bem-vindo <strong>$nome $sobrenome</strong>! Esse é meu forms! <br>";
        ?>
        <a href="index.html">Clique aqui para voltar ao início</a>
    </main>
</body>
</html>
