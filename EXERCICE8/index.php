<?php
    session_start();
    include 'fonctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO8</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">
</head>
<body>
    <div class="css">
    <form id="out" action="controller.php" method="POST">
    <label for="nombre"><h6>Entrer un nombre positif</h6></label>
    <input type="text" name="nombre"><br>
    <input type="submit" value="Entrer" name="go">
    </form>
    </div>
    
    <div>
    <br>
            <div class="lesBoutons">
                <button > <a href="../EXERCICE7/index.php"><<<<<</a></button>
                <button> <a href="../EXERCICE9/index.php">>>>>></a></button>
            </div>
    
    </div>
   
    <div class="nmbre">
    <?php

        if (isset($_SESSION['n']) && !isset($_SESSION['error'])) {

            echo "<b> Les nombres compris entre 1 et ".$_SESSION['n']." sont :</b>";


            echo listNmbre($_SESSION['n']);

        }

        if (isset($_SESSION['error'])) {
            
            echo "<h2 style='color:red'>".$_SESSION['error']."</h2>";
        }
        session_unset();
    ?>
    </div>

</body>
</html>
