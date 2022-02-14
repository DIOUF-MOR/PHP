<?php

    session_start();


if (isset($_POST['top'])) {

    $j=$_POST['jours'];
    $m=$_POST['mois'];
    $a=$_POST['annee'];
    $error=[];

    if (!empty($j) && ($j)>=1 && is_int($j) && !empty($m) && ($m)>=1 && ($m)<=12 && is_int($m) && !empty($a) && ($a)>=1 && is_int($a) ){

            datePrecedente ($j,$m,$a);

            dateSuivante ($j,$m,$a,$jS,$mS,$aS);

        header ('location:index.php');
        

    }else{

        if (empty($j) || $j<1 || empty($m) || $m<1 || $m>12 || empty($a) || $m<=0) {

            $_SESSION['error']='tous les champs sont obligatoires';

        }else{

        }
        
        
        header ('location:index.php');   
    }
    
}

?>