<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2023</title>

    <!--------Bootstrap group------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstratpcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!----Meu Style e script---->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    
</head>
<body>
    <!----cabeçalho---->
    <header class=" p-5 bg-primary text-white text-center">
         <h1>Meu site com Bootstrap</h1>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 p-4 bg-dark">
          <h2>Meu Menu</h2>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-item" href="?controller=site&action=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-item" href="?controller=site&action=products">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-item" href="?controller=site&action=contact">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-item" href="?controller=site&action=about">Sobre</a>
            </li>
          </ul>       
          <h3>Cliente</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-item" href="?controller=client&action=register">Cadastro</a>
            </li>
           </ul>              
            </nav>
            <section class="col-md-9">