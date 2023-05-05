<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>replit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="script.js" defer></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
		<div class="container-fluid">
			<img src="img/logo.png" alt="">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Courses</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hobbies</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Projects</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="pai">
		<div class="formulario">
			<?php
			$nome = $_GET['nome'] ?? "";
			$sobrenome = $_GET['sobrenome'] ?? "";
			?>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="formestilo">
				<div class="mb-3" id="labelform">
					<label for="nome"><strong>Nome</strong></label>
					<input type="text" name="nome" class="form-control" placeholder="Apenas o nome" value="<?= $nome ?>">
					<div id="emailHelp" class="form-text">Digite para uma melhor experiência.</div>
				</div>
				<div class="mb-3" id="labelform">
					<label for="sobrenome"><strong>Sobrenome</strong></label>
					<input type="text" name="sobrenome" class="form-control" placeholder="Apenas o sobrenome" value="<?= $sobrenome ?>">
					<div id="emailHelp" class="form-text">Digite para uma melhor experiência.</div>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
				</div>
				<button type="submit" class="btn btn-primary">Acessar</button>
			</form>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-code-slash icone" viewBox="0 0 16 16">
			<path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
		</svg>
		<section class="conteudo" id="conteudo">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Boas vindas</h5>
					<h6 class="card-subtitle mb-2 text-body-secondary"><?php echo "Seja bem vindo <br> $nome $sobrenome ao meu site!" ?>
					</h6>
					<p class="card-text">Este é um modelo que venho mostrar utilizando recursos simples de php, javascript e bootstrap</p>
					<a href="#" class="card-link">Meus hobbies</a>
					<a href="#" class="card-link">Meus cursos</a>
				</div>
			</div>
			<div class="testejs">
				<button id="btn" class="btn">Clique aqui</button>
			</div>
		</section>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>