<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes PHP e JS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h3>Calculadora de soma</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Digite o 1° número:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2"><?php echo "<br>Digite o 2° número:" ?></label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Resultado">
        </form>
    </main>
    <section id="resultado">
        <?php 
            $soma = $valor1 + $valor2;
            echo "O valor da soma entre $valor1 e $valor2 é: $soma";
        ?>
    </section>
</body>
</html>