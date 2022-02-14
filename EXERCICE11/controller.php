<?php
 session_start();


if (isset($_POST['vue'])) {

    $m=$_POST['champ'];

    $error=[];

    if (!empty($m) && is_numeric($m)) {

       $_SESSION['m']=$m;

       header ('location:index.php');
        
    }else {

        if (empty($m)) {

            $_SESSION['error']='champ obligatoire';

        }else {

            $_SESSION['error']='veuillez saisir un nombre.';
        }

        header ('location:index.php');
    }
}
// session_unset();

?>