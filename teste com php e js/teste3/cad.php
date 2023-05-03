<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php 
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];
        echo "<p>Bem vindo $nome $sobrenome ao meu site!</p>";
    ?>
    <button id="btn" class="btn">Clique em mim</button>
    <script src="script.js"></script>
</body>
</html>