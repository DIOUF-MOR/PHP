<?php
$nmbre1;
$nmbre2;
$tmp;
function permutation($nmbre1,$nmbre2){

    $tmp=$nmbre1;
    $nmbre1=$nmbre2;
    $nmbre2=$tmp;

    return $nmbre1." et ".$nmbre2;
}
?>