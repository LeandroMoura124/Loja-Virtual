
<!DOCTYPE HTML>
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
		background-color: #32cfe456;
}
</style>

</head>

<body>
	<!--A funcionalidade do uso "include", tem como finalidades chamar um arquivo atraves de outro. EX - Coloquei minha nav-bar em outro arquivo e chamei pelo código include 'nav.php'-->
	<?php 
	// Chamando outros componentes
	 session_start();
	 include 'conexao2.php';
	 include 'nav.php';
     include 'cabecalho.html';
	 


	// Variavel $consulta vai receber variavel $cn que receberá resultado de uma query.
    $consulta  = $pdo->query("select cd_livro, nm_livro, vl_preco, ds_capa, qt_estoque from vw_livro where sg_lancamento = 'S'");

	?>

	

	<div class="container-fluid">
		<div class="row">
			<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
			<div class="col-sm-3">
				<img src="imagens/<?php echo $exibe['ds_capa'] ?>.jpg" class="img-responsive" style="width:100%">
				<div><h4><b><?php echo mb_strimwidth( $exibe['nm_livro'],0,30, '...'); ?></b></h4></div>
				<div><h5>R$ <?php echo number_format( $exibe['vl_preco'],2,',','.'); ?></h5></div>

				<div class="text-center">
					<a href="detalhes.php?cd=<?php echo $exibe['cd_livro'];?>">
						<button class="btn btn-lg btn-block btn-default">
							<span class="glyphicon glyphicon-info-sign" style="color: cadetblue;">Detalhes</span>
						</button>	
					</a>
					
 				</div>

				 <div class="text-center" style="margin-top: 5px; margin-bottom: 5px;">
				 	<?php if($exibe ['qt_estoque'] > 0 ){ ?>

					
					<button class="btn btn-lg btn-block btn-info">
						<span class="glyphicon glyphicon-usd">Comprar</span>
					</button>	

					<?php } else { ?>
					<button class="btn btn-lg btn-block btn-danger" disabled>
						<span class="glyphicon glyphicon-remove-circle">Comprar</span>
					</button>	

					<?php } ?>
					
 				</div>

			</div>
			<?php } ?>
			
		</div><!--Fechando container class row-->
	</div><!--Fechando container fluid--> 

	<?php 
	include 'rodape.html' //Chamei o rodape com o include php
	?>

</body>
</html>

<script>

</script>

