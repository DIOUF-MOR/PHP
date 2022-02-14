<?php
$nmbre1;
$nmbre2;
$tmp;
function permutation($nmbre1,$nmbre2){
    echo"voilà les deux nombres <br>";
    echo $nmbre1;
    echo" et ";
    echo $nmbre2,'<br>';
    $tmp=$nmbre1;
    $nmbre1=$nmbre2;
    $nmbre2=$tmp;
    echo "leur permutation est <br> ";
    echo $nmbre1;
    echo" et ";
    echo $nmbre2;
}
?>