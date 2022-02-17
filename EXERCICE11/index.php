<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO11</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">
</head>
<body>
    <div class="css">
    <b>donner une valeure superieure à 10000<b>
    <form method="POST" action="controller.php">
    <input type="text" name="champ"><br>
    <input type="submit" value="valider" name="vue">
    </form>
    </div>
    <br>
            <div class="lesBoutons">
                <button > <a href="../EXERCICE10/index.php"><<<<<</a></button>
                <button> <a href="../EXERCICE12/index.php">>>>>></a></button>
            </div>
    
    <div class="nmbre">
    <?php
        include 'fonctions.php';
       
        if (isset($_SESSION['m'])) {

            $m=$_SESSION['m'];

            $tab=(clePremier($m));

            if ($m>60) {
                
                affichtable($tab,10);

            }else {

                affichtable($tab,5);
            }
            
             echo 'Premier <br>'; 
            
            echo"\n";


            $tabInf=(cleInferieur($m));

            if ($m>60) {
                
                affichtable($tabInf,10);
                

            }else {

                affichtable($tabInf,5);
            }
            
            echo 'Premier Inferieur <br>';

            
           $tabSup=(cleSuperieur($m));
    

            if ($m>60) {

                affichtable($tabSup,10);

            }else {
                affichtable($tabSup,5);
            }
            echo 'Premier Superieur <br>';
            
        }
            
        
        if (isset($_SESSION['error'])) {

            echo "<p style='color:red'>".$_SESSION['error']."</p>";
        }

        session_unset();
    ?>
    </div>
</body>
</html>