<?php
$Longueur;
$largeur;
function perimetre ($Longueur,$largeur){
    $perimetre=(2*($Longueur+$largeur));
    return $perimetre;
}
function surface ($Longueur,$largeur){
    $surface=($Longueur*$largeur);
    return $surface;
}
function diagonale ($Longueur,$largeur){
    $diagonale=sqrt($Longueur*$Longueur+$largeur*$largeur);
    return $diagonale;
}
?>