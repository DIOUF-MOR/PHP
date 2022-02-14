<?php
session_start();

include 'fonctions.php';

if (isset($_POST['oui'])) {

    $nbr=$_POST['sy'];

    $error=[];

    if (!empty($nbr) && is_numeric($nbr)) {
        
       $_SESSION['n']=$nbr;

       header ('location:index.php');

    }else {

        if(empty($nbr)){
            $_SESSION['error'] = "Veuillez renseigner ce champ";
        }else{
            $_SESSION['error'] = "Veuillez entrer un nombre";
        }
        header ('location:index.php');
    }
}


?>