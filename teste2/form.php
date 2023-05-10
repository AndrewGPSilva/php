<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <?php
       $nome = $_GET['nome'];
       $email = $_GET['email'];
       $mensagem = $_GET['mensagem'];
       $produto = array();

       array_push($produto, $nome, $mensagem);

    ?>
    <h1>Cadastrado com sucesso!</h1>
    <div class="instructions">
      <p>Informações preenchidas pelo usuário:</p>
      <ul>
        <li><strong>Nome: <br></strong><?php echo "$nome" ?></li>
        <li><strong>Email: <br></strong><?php echo "$email" ?></li>
        <li><strong>Mensagem: <br></strong><?php echo "$mensagem" ?></li>
      </ul>
    </div>   
    <script src="script.js"></script>
  </body>
</html>
