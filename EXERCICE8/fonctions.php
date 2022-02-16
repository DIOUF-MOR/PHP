<?php

function listNmbre($n){
    echo "<b> Les nombres compris entre 1 et ".$n." sont :</b>";
    for ($i=1; $i <= $n; $i++) { 
        echo "<li>". $i." </li>";
    }
}
?>