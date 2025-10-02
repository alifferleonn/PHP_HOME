<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aliffer Leonn</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h3>Número SUCESSOR e ANTECEESOR</h3>
        <?php 
            $num = 241;
            echo "Numero escolhido foi: $num </br>";
            echo "O sucessor de $num é " . ($num - 1) . "\n" .
                  "O antecessor de $num é " . ($num + 1);
        ?>
    </div>
    
</body>
</html>