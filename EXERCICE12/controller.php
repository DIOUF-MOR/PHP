<?php
session_start();

if (isset($_POST['traduit'])) {
    
    
    $_SESSION['fr']=$_POST['langue'];

    $_SESSION['ang']=$_POST['language'];



}




?>