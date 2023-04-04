$(document).ready(function(){

    $('section').load("pages/home.html");

    $("#menuHome").click(function(){
       $('section').load("pages/home.html");
    });
    $("#menuProduto").click(function(){
        $('section').load("pages/produto.html");
    });

    $("#menuContato").click(function(){
        $('section').load("pages/contato.html");
    });
  });