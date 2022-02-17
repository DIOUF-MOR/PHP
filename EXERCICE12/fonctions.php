<?php
function afficheurTab (array $tab,int $taille){
    $table= "<table border>";
    for ($i=1; $i<= count($tab) ; $i++) { 
        if ($i%$taille==1) {
            $table=$table.'<tr>';
        }
        $table=$table.'<td>'.$tab[$i-1].'</td>';
        if ($i%$taille==0) {
            $table=$table.'</tr>';
        }
    }
    echo $table;
}