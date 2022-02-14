<?php

session_start();

if (isset($_POST['go'])) {
    
    $nbr=$_POST['imp'];

    $error[''];

    if (!empty($nbr) && is_numeric($nbr) && $nbr>0) {

        $_SESSION['N']=$nbr;

        header ('location:index.php');

    }else {
        if (empty($nbr)) {
           
            $_SESSION['error'] ="Ce champ est obligatoire";

        }else {
            $_SESSION['error']="veuiller saisire un nombre positif";
        }

        header ('location:index.php');
    }
}
// session_unset();
?>