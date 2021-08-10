
<! DOCTYPE HTML>
<html lang="pt-br"> <!-- indicando a linguagem que iremos usar no codigo html -->
<head>
<title>Minha Loja</title>
<meta charset="utf-8"> <!-- indicando o sistema de caractere utf-8 -->

<!--
	o nosso site será responsivo, para isto precisaremos usar uma metatag
	que irá conter informações da viewport(area que o site aparece no browser)
	Na viewport informaremos que a largura sera = a largura da janela
    do meu navegador (Browser), seja em um tablet ou celular.
 -->
<meta name="viewport" content="width=device-width,initial-scale-1">

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	.navbar{
		margin-bottom:0px;
		background: #f5e5c7;
	}
</style>

</head>

<body>
	<?php include 'nav.php' ?> <!--A funcionalidade do uso "include", tem como finalidades chamar um arquivo atraves de outro. EX - Coloquei minha nav-bar em outro arquivo e chamei pelo código include 'nav.php'-->
	<?php include 'cabecalho.html' ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			<div class="col-sm-3">
				<img src="https://placehold.it/450x320" class="img-responsive" style="width:100%">
				<div><h1>Nome do produto</h1></div>
				<div><h4>R$500,00</h4></div>
			</div>
			
		</div><!--Fechando container class row-->
	</div><!--Fechando container fluid--> 

	<?php 
	include 'rodape.html' //Chamei o rodape com o include php
	?>

</body>
</html>

<script>

</script>

