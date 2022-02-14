<?php
session_start();
include 'fonctions.php';
if(isset($_POST['go'])){

    $_SESSION['n']=$_POST['nombre'];

    if (!empty($_SESSION['n']) && $_SESSION['n']>0 && is_numeric($_SESSION['n'])) {
        
       echo listNmbre($_SESSION['n']);

       
    }else {
        echo 'veuiller saisir un nombre positif';
        
    }
}


?>