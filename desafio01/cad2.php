<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>
        <?php 
            $valor = $_GET["numero2"];
            $valor_convertido = $valor / 5.22;
            echo "Você possui $$valor_convertido dolares."; 
        ?>
    </p>
</body>
</html>