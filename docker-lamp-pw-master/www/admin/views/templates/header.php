<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Área Administrativa</title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<!-- Meu css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

	<header class="p-3 text-center">
		<h1>Área Administrativa</h1>
		<a href="?controller=main&action=logout">Sair</a>
	</header>

	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-3 p-3">
				<h2>Meu menu</h2>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="?">Home</a>
					</li>
					
				</ul>
				<h2>Clientes</h2>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="?controller=client&action=listClients">Listar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=client&action=insertClient">Inserir</a>
					</li>
				</ul>
			</nav>
			<section class="col-md-9 p-3">