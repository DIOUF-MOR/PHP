<?php
session_start();

include 'fonctions.php';
$tabFr=array ('JANVIER','FEVRIER','MARS','AVRIL','MAIS','JUIN','JUILLET','AOUT','SEPTEMBRE','OCTOBRE','NOVEMBRE','DECEMBRE');
$tabEng=array ('january','february','march','april','may','june','july','august','september','october','november','december');


if (isset($_POST['traduit'])) {
    switch ($_POST['lang']) {
        case '1':
            $_SESSION['L']=$tabFr;
            break;
        case '2':
            $_SESSION['L']=$tabEng;
            break;
        default:
            $_SESSION['L']=$tabFr;
            break;
    }
    header('location:index.php');
}