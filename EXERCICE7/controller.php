<?php

    session_start();

include 'fonctions.php';

if (isset($_POST['top'])) {

    $j=$_POST['jours'];
    $m=$_POST['mois'];
    $a=$_POST['annee'];

    if (!empty($j) && ($j)>=1 && is_numeric($j) && !empty($m) && ($m)>=1 && ($m)<=12 && is_numeric($m) && !empty($a) && ($a)>=1 && is_numeric($a) ){

        
        datePrecedente ($j,$m,$a);

        dateSuivante ($j,$m,$a,$jS,$mS,$aS);
        
        // header ('location:index.php');

    }else{
        
        header ('location:index.php?error=1');
        
    }
    
}

?>