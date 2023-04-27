<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando condições</title>
</head>
<body>
    <h1>Testando condições</h1>
    <?php 
        $idade = 17;
        echo "O úsuario tem $idade anos de idade!";
        if ($idade > 18) {
            echo "O úsuario é maior de idade!";
        } else {
            echo "O úsuario é menor de idade!";
        }
    ?>
</body>
</html>