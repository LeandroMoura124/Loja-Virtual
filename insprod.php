<?php
include 'conexao2.php';
include 'resize-class.php';




$isbn = $_POST['txtisbn'];
$cd_cat = $_POST['sltcat'];
$nome_livro = $_POST['txtlivro'];
$cd_autor = $_POST['sltautor'];
$nopag = $_POST['txtpag'];
$preco = $_POST['txtpreco'];
$qtde = $_POST['txtqtde'];
$resumo = $_POST['txtresumo'];
$lanc = $_POST['sltlanc'];



$remover1='.';
$preco = str_replace($remover1, '', $preco);
$remover2 = ',';
$preco = str_replace($remover2, '.', $preco);


$recebe_foto1 = $_FILES['txtfoto1'];

$destino = "imagens/";

preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $recebe_foto1['name'],$extencao1);


$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

try{

$inserir=$pdo->query("insert into tbl_livro(no_isbn, cd_categoria, nm_livro, cd_autor, no_pag, vl_preco, qt_estoque, ds_resumo_obra, ds_capa, sg_lancamento) 
                                    VALUES ('$isbn', '$cd_cat', '$nome_livro', '$cd_autor', '$nopag', '$preco', '$qtde', '$resumo', '$img_nome1', '$lanc')");
            move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);
            $resizeObj = new resize($destino.$img_nome1);
            $resizeObj -> resizeImage(340, 480, 'crop');
            $resizeObj -> saveImage($destino.$img_nome1, 100);

header('location:index.php');


}catch(PDOException $e) {

    echo $e->getMessage();
}






?>