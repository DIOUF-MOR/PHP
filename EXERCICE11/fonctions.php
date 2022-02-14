<?php

    function nombrePremier ($n)
    {
        $cpt=1;
        $som=0;
        $cptp=0;
        for ($i=2; $i <= $n; $i++) 
        { 
            if ($n%$i==0) 
            {
                $cpt++;       
            }  
        }
        if ($cpt==2) 
        {
        return true;
        }
    }

    //#############################----------------################

function clePremier($m)
{
    $tab=[];
    for ($j=2; $j <= $m; $j++) { 
        if (nombrePremier ($j)) {
            $tab[]=$j;
        }
    }
    return $tab;
}

//#############################----------------################

function moyenne($m){
    $som=0;
    for ($i=1; $i <= $m; $i++) { 
        $som=$som+$i;
    }
    $moy=$som/$m;
    return $moy;
}

//#############################----------------################

function cleInferieur($m){
    $tabInf=[];
    for ($j=2; $j <= $m; $j++) { 

        if (nombrePremier($j) && $j< moyenne($m)) {
            
            $tabInf[]=$j;
        }
    }
    return $tabInf;
}


//#############################----------------################

function cleSuperieur($m){
    $tabSup=[];
    for ($j=2; $j <= $m; $j++) { 

        if (nombrePremier($j) && $j > moyenne($m)) {
            
            $tabSup[]=$j;
        }
    }
    return $tabSup;
}

//#############################----------------################


function affichtable(array $tabl, $taille){

        $table='<table>';

        for ($i=1; $i <= sizeof($tabl) ; $i++) { 
            
            if (($i%$taille)==1) {

                $table=$table.'<tr>';    
            }
            $table=$table.'<td>'.$tabl[$i-1].'</td>';

            if ($i%$taille==0) {

                $table=$table.'</tr>';
            }
        }
        
        echo $table;
}


?>