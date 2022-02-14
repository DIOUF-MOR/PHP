<?php
function afficheurTab (array $tab,int $taille){
    $table= '<table>';
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

function tabLangue(array $tab){
    $tab=[];
    $tabFr=[];
    $tabEng=[];
    $tabFr=array ('JANVIER','FEVRIER','MARS','AVRIL','MAIS','JUIN','JUILLET','SEPTEMBRE','OCTOBRE','NOVEMBRE','DECEMBRE');
    $tabEng=array ('january','february','march','april','may','june','july','august','september','october','november','december');
    $tab=('français'=>$tabFr,'English'=>$tabEng);
}
?>