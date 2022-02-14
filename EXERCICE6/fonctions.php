<?php

function solutions_de_l_equation($a,$b,$c,&$x0,&$x1,&$x2,&$x,&$o){
    
    if ($a<>0){

        $delta=$b*$b-4*$a*$c;

        if ($delta>0) {

            $x1=(-$b-sqrt($delta))/2*$a;

            $x2=(-$b+sqrt($delta))/2*$a;
        }
        elseif ($delta==0) {

            $x0=((-1)*$b)/(2*$a);
            
        }
        elseif ($delta<0) {

            $o= "pas de solution";
        }
    }
}
    
?>