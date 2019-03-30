<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<style type="text/css">
		body {
			margin-top: 80px;
		}
		.fixo-topo {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			background: rgba(0,0,0,0.8); 
			z-index: 1;
		}
	</style>

	<title>Titulo do Blog</title>
</head>

<body>

	<!-- inicio header -->
	<header class="fixo-topo">
		<nav class="navbar navbar-expand-md navbar-light navbar-transparente">
			<div class="container">
				<!-- logo -->
				<a href="" class="navbar-brand">
					<img class="ml-5" src="">
				</a>
				<!-- menu responsivo -->
				<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
					<i class="fas fa-bars text-white"></i>
				</button>

				<!-- navegacao -->
				<div class="collapse navbar-collapse mr-5" id="nav-target">
					<ul class="navbar-nav ml-auto m-2">

						<li class="nav-item">
							<a href="index" class="nav-link text-white">Home</a>
						</li>

						<div class="dropdown item-menu">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
								Categoria
								<span class="caret"></span>
							</button>

							<div class="dropdown-content">
								<ul class="dropdown-menu">
									
									<li class="nav-item">
										<a href="categoria.php?nome=1" class="nav-link">Categoria 1</a>
									</li>
									<li class="nav-item">
										<a href="categoria.php?nome=2" class="nav-link">Categoria 2</a>
									</li>
									<li class="nav-item">
										<a href="categoria.php?nome=3" class="nav-link">Categoria 3</a>
									</li>
									<li class="nav-item">
										<a href="categoria.php?nome=4" class="nav-link">Categoria 4</a>
									</li>
								</ul>
							</div>
						</div>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- final header -->



