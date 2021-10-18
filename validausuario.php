<?php 
    include 'conexao2.php';


    session_start(); // iniciando uma sessão
   

    $Vemail = $_POST['txtemail']; //orlindo@gmail.com
    $Vsenha = $_POST['txtsenha']; //orlindo123


    //echo $Vemail.'<br>';
    //echo $Vsenha.'<br>';


    $consulta = $pdo ->query("select cd_usuario, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$Vemail' and ds_senha = '$Vsenha'");

if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);

    if($exibeUsuario['ds_status']==0){
        $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
        $_SESSION['Status']=0;
        header('location:index.php');
    }
    else{
        $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
        $_SESSION['Status']=1;
        header('location:index.php');
    }
}
    else{
        header('location:erro.php');
    }
?>