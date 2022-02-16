<?php
session_start();

if(isset($_POST['go'])){

    $_SESSION['n']=$_POST['nombre'];
    $error=[];
    if (!empty($_SESSION['n']) && $_SESSION['n']>0 && is_numeric($_SESSION['n'])) {
        
        $_SESSION['n'];

       header ('location:index.php');
    }else {

        $_SESSION['error']='veuiller saisir un nombre positif';

        header ('location:index.php');
    }


}


?>