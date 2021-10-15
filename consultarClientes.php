<!DOCTYPE html>

<html>
    <head>
        <meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/funcoes.js"></script>
        <title>SISTEMA DE AGENDAMENTO - CLIENTES</title>
    </head>
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-dark bg-dark col-12">
				<a class="navbar-brand" href="index.php">SISTEMA WEB</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Opções
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="index.html">Cadastrar</a>
								<a class="dropdown-item" href="#">Consultar</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>  
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Consultar - Contatos Agendados</h5>
					<table class="table table-responsive" style="width: auto;">
						<thead>
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Origem</th>
								<th scope="col">Contato</th>
								<th scope="col">Observação</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tbody id="TableData">

						</tbody>
					</table>
					<button type="button" id="btnListar" class="btn btn-primary">Buscar Agendamento</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>