<?php
include 'conexao2.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$end = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

/*                      Testando variaveis
echo $nome.'<br>';
echo $email.'<br>';
echo $senha.'<br>';
echo $end.'<br>';
echo $cidade.'<br>';
echo $cep.'<br>';
*/

$consulta = $pdo->query("select ds_email from tbl_usuario where ds_email='$email' ");
$exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount() == 1){
    header('location:erro1.php');
}
else{
   $incluir = $pdo->query("
        insert into tbl_usuario(nm_usuario,ds_email,ds_senha,ds_status,ds_endereco,ds_cidade,ds_cep)
        Values                  ('$nome', '$email', '$senha', '0', '$end', '$cidade', '$cep')");
        
        header('location:ok.php');
}

?>