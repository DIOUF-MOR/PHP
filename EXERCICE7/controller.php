<?php

    session_start();
    include 'fonctions.php';

// if (isset($_POST['top'])) {

//     $j=$_POST['jours'];
//     $m=$_POST['mois'];
//     $a=$_POST['annee'];



//     if (!empty($j) && ($j)>=1 && is_int($j) && !empty($m) && ($m)>=1 && ($m)<=12 && is_int($m) && !empty($a) && ($a)>=1 && is_int($a) ){

//         datePrecedente ($j,$m,$a);

//         dateSuivante ($j,$m,$a);

//         header ('location:index.php');
        

//     }else{

//          $_SESSION['error']='<h5>Veuiller revoire votre saisie </h5> ';
        
//         header ('location:index.php');
        
//     }
    
// }

?>
<?php



if (isset($_POST['top'])) {

$j=$_POST['jours'];
$m=$_POST['mois'];
$a=$_POST['annee'];
        $_SESSION["j"]=$j;
        $_SESSION["m"]=$m;
        $_SESSION["a"]=$a;

if (!empty($_SESSION["j"]) && ($_SESSION["j"])>=1 && is_numeric($_SESSION["j"]) && !empty($_SESSION["m"]) && ($_SESSION["m"])>=1 && ($_SESSION["m"])<=12 && is_numeric($_SESSION["m"]) && !empty($_SESSION["a"]) && ($_SESSION["a"])>=1 && is_numeric($_SESSION["a"]) ){

    

    $j=$_SESSION["j"];
    $m=$_SESSION["m"];
    $a=$_SESSION["a"];

    datePrecedente ($j,$m,$a);

    dateSuivante ($j,$m,$a);
    
    header ('location:index.php');

}else{

    $_SESSION['error']='veuiller revoir votre saisie';
    
    header ('location:index.php');
    
}

}