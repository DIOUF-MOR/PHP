<?php

    session_start();

    include 'fonctions.php';

    if (isset($_POST['top'])) {

    $j=$_POST['jours'];
    $m=$_POST['mois'];
    $a=$_POST['annee'];

        $_SESSION["j"]=$j;
        $_SESSION["m"]=$m;
        $_SESSION["a"]=$a;

    if (!empty($_SESSION["j"]) && ($_SESSION["j"])>=1 && is_numeric($_SESSION["j"]) && !empty($_SESSION["m"]) && ($_SESSION["m"])>=1 && ($_SESSION["m"])<=12 && is_numeric($_SESSION["m"]) && !empty($_SESSION["a"]) && ($_SESSION["a"])>=1 && is_numeric($_SESSION["a"]) )
    {
        $j=$_SESSION["j"];
        $m=$_SESSION["m"];
        $a=$_SESSION["a"];

        datePrecedente ($j,$m,$a);

        dateSuivante ($j,$m,$a);
        
        header ('location:index.php');

    }else{

        if (empty($_SESSION["j"]) || empty($_SESSION["m"]) || empty($_SESSION["a"])) {
           
            $_SESSION['error']='Le remplissage de tous les champs est obligatoire';
        }else {
            
            $_SESSION['error']='veuiller revoir votre saisie';
            
        }
       
        header ('location:index.php');
    }
}
?>
