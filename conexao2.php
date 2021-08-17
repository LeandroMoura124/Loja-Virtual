<?php 

    $localhost = "localhost";
    $user = "leo";
    $passw = "123456";
    $banco = "db_ead";
    

    //orientada a objetos com PDO

    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql  = $pdo->query("SELECT*FROM tbl_livro");
    $sql->execute();

    /*echo $sql->rowCount();*/

?>