<?php

    session_start();

    include 'fonctions.php';

    if (isset($_POST['top'])) {

    
        $_SESSION["j"]=$_POST['jours'];
        $_SESSION["m"]=$_POST['mois'];
        $_SESSION["a"]=$_POST['annee'];

        $error=[];

        if (!empty($_SESSION["j"]) && !empty($_SESSION["m"])  && !empty($_SESSION["a"]) ) {  
             
            if (dateValide($_SESSION["j"],$_SESSION["m"],$_SESSION["a"])) {
                
                $_SESSION["jv"]=$_SESSION["j"];
                $_SESSION["mv"]=$_SESSION["m"];
                $_SESSION["av"]=$_SESSION["a"];
    
                datePrecedente ($j,$m,$a);
    
                dateSuivante ($j,$m,$a);

                header ('location:index.php');

            }else {

                $_SESSION['error']='La date saisie est invalide';

                header ('location:index.php');
            }
            
            
            

        }else{
                    
            $_SESSION['error']='Le remplissage de tous les champs est obligatoire';
           
            
            header ('location:index.php');
        }   
        
        
    }
             
?>
