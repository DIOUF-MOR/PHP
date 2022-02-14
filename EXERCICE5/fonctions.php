<?php
$distance;
function distance($abcisse1,$ordonne1,$abcisse2,$ordonne2){
$distance=sqrt(($abcisse2-$abcisse1)*($abcisse2-$abcisse1)+($ordonne2-$ordonne1)*($ordonne2-$ordonne1));
 return $distance;
}
?>