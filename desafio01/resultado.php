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
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $ant = $numero - 1;
            $suc = $numero + 1;
            echo "Numero escolhido $numero </br> Antecessor $ant </br> Sucessor $suc </br>";
        ?>
            <a href="index.html">Voltar para pagina iniciar</a> 

    </main>
</body>
</html>