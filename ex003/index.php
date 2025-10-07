<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // Definindo o time zone para SP (GMT-3)
        
        echo "Data de hoje: " . date("d/M/Y");
        echo "</br>Horario atual: " . date("G:i:s");
    ?>
</body>
</html>