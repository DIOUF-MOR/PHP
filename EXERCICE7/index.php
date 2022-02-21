<?php
    session_start();
    
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO7</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">

</head>
<body>
    <div class="conteneur">
        <div>
            <h5>Saisir une date</h5>
        </div>
        <div>
            <form id="nice"  method="POST" action="controller.php">
                <label for="jours"><h6>Donner le jours</h6></label>
                <input type="text" name="jours">
                <label for="mois"><h6>Donner le mois</h6></label>
                <input type="text" name="mois">
                <label for="annee"><h6>Donner l'année</h6></label>
                <input type="text" name="annee"><br>
                <input type="submit" value="valider" name="top">
            </form> 
        <br>
            <div class="lesBoutons">
                <button > <a href="../EXERCICE6/index.php"><<<<<</a></button>
                <button> <a href="../EXERCICE8/index.php">>>>>></a></button>
            </div>
        </div>

    <div class="ph3p">
    <?php
         
         if (isset($_SESSION["jv"]) && isset($_SESSION["mv"]) && isset($_SESSION["mv"])) {

            echo "<h6 style='color:blue'>Voila la date que tu as saisi :".$_SESSION["jv"].'/'.$_SESSION["mv"].'/'.$_SESSION["av"]."</h6>";
            
            echo '<h6>La date précedente est : le ' .$_SESSION["jP"]." / ". $_SESSION["mP"]." / ". $_SESSION["aP"] .'</h6>'; 

            echo '<h6>La date suivente est : le '.$_SESSION["jS"]." / ". $_SESSION["mS"]." / ". $_SESSION["aS"].'</h6>';
         }   
     
        if (isset($_SESSION['error'])) {

            echo "<h6 style='color:blue'>".$_SESSION['error']."</h6>";
        }
        session_unset();
    ?>
    </div>
    </div>
</body>
</html>