<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script src="jquery.mask.js"></script>

<script>
	
	
	
$(document).ready(function(){
	
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
$("#isbn").mask('000-00-000-0000-0'); 
	
});
	
</script>
	
<style>

.navbar{
	margin-bottom: 0;
    background-color: #32cfe456;
}
	
	
</style>
	
	
	
	
</head>

<body>
	
<?php
	session_start();

    if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1) { // se a sessão não tiver um usuário administrador logado será executado a condição
        header('location:index.php'); // levar o usuário para página index.php
    }
	include 'conexao2.php';	
	include 'nav.php';
	include 'cabecalho.html';

   $consultaCat = $pdo ->query('select * from tbl_categoria');
   $consultaAutor = $pdo-> query("select * from tbl_autor");
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de Livros</h2>
				
				<form method="post" action="insprod.php" name="incluiProd" enctype="multipart/form-data">
		
				
					<div class="form-group">

						<label for="txtisbn">ISBN</label>
						<input type="text" name="txtisbn" class="form-control" required id="txtisbn">
					</div>
						
					
					
					<div class="form-group">

						<label for="sltcat">Categoria</label>
						<select name="sltcat" class="form-control">
							<option value="">Selecione</option>
							<?php while($listaCat = $consultaCat-> fetch(PDO::FETCH_ASSOC)) { ?>
								
								<option value="<?php echo $listaCat['cd_categoria'];?>"><?php echo $listaCat['ds_categoria']?></option>
							<?php }?>
							 
						</select>		
					</div>
					
					

					<div class="form-group">
				
						<label for="txtlivro">Nome do Livro</label>
						<input type="text" name="txtlivro" class="form-control" required id="txtlivro">
					</div>
					
					
					<div class="form-group">
				
						<label for="sltautor">Autor</label>
						<select name="sltautor" id="" class="form-control">
							<option value="">Selecione</option>
							<?php while($listaAutor = $consultaAutor-> fetch(PDO::FETCH_ASSOC)) { ?>
								
								<option value="<?php echo $listaAutor['cd_autor'];?>"><?php echo $listaAutor['nm_autor']?></option>
							<?php }?>
						</select>
					</div>
					
					
					
					<div class="form-group">

						<label for="txtpag">Número de Páginas</label>					
						<input type="number" class="form-control"  name="txtpag" required id="txtpag">
					</div>
					
					
					
					<div class="form-group">
				
						<label for="txtpreco">Preço</label>			
						<input type="text" class="form-control"  name="txtpreco" required id="txtpreco">
					</div>
					
					<div class="form-group">
				
						<label for="txtqtde">Quantidade em Estoque</label>	
						<input type="number" class="form-control" name="txtqtde" required  id="txtqtde">
					</div>

					<div class="form-group">
						<label for="txtresumo">Resumo da obra</label>
						<textarea name="txtresumo" class="form-control" rows="5"></textarea>
					</div>
					


					<div class="form-group">
				
						<label for="txtfoto1">Foto Principal</label>
						<input type="file" accept="image/*" class="form-control"  name="txtfoto1" >
					</div>

					
					<div class="form-group">
					<label for="sltlanc">Lançamento?</label>
					<select name="sltlanc" class="form-control">
						<option value="">Selecione</option>
						<option value="S">Sim</option>
						<option value="N">Não</option>
					</select>
					</div>
					
								
					<button type="submit" class="btn btn-lg btn-default">
						<span class="glyphicon glyphicon-pencil"> Cadastrar </span>	
					</button>
				
				</form> 
				
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>