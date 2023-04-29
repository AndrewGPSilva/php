<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Olá</p>
    <?php 
        $nome = $_GET["nome"] ?? "Nome não informado!";
        $sobrenome = $_GET["sobrenome"] ?? "Sobrenome não informado!";
        echo "Seja bem vindo <strong>$nome $sobrenome</strong> ao meu site!";
    ?>
</body>
</html>