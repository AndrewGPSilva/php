<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>replit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="formulario">
		<?php 
			$nome = $_GET['nome'] ?? 0;
			$sobrenome = $_GET['sobrenome'] ?? 0;
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get" class="formestilo">
			<div class="mb-3" id="labelform">
				<label for="nome"><strong>Nome</strong></label>
				<input type="text" name="nome" class="form-control" placeholder="Apenas o nome">
				<div id="emailHelp" class="form-text">Digite para uma melhor experiência.</div>
			</div>
			<div class="mb-3" id="labelform">
				<label for="sobrenome"><strong>Sobrenome</strong></label>
				<input type="text" name="sobrenome" class="form-control" placeholder="Apenas o sobrenome">
				<div id="emailHelp" class="form-text">Digite para uma melhor experiência.</div>
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
			</div>
			<button type="submit" class="btn btn-primary">Acessar</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
</body>

</html>