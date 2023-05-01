<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["num1"];
        $num_antecessor = $numero - 1;
        $num_sucessor = $numero + 1;
        echo "<p> O número escolhido foi: $numero </p>" ;
        echo "<p> Seu número antecessor é: $num_antecessor </p>";
        echo "<p> Seu número sucessor é: $num_sucessor </p>"
    ?>
    <button onclick="javascript:window.location.href='index.html'">VOLTAR</button>

    <p>
        <?php 
            $num_ale = rand(0, 1000);
            echo "Seu número da sorte é: $num_ale";
        ?>
    </p>
    
    <p>Gostaria de ver um conversor de Reias para dolarés?</p>
    <form action="cad2.php" method="get">
        <label for="num2">Digite a quantia em reais aqui:</label>
        <input type="number" name="numero2" id="idnumero2">
        <input type="submit" value="Verificar valor">
    </form>
</body>
</html>