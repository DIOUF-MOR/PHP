<?php
    // session_start();
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO7</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
       
        <h5>Saisir une date</h5>
        <form id="nice" method="POST" action="controller.php">
        <label for="jours"><h6>Donner le jours</h6></label>
        <input type="text" name="jours">
        <label for="mois"><h6>Donner le mois</h6></label>
        <input type="text" name="mois">
        <label for="annee"><h6>Donner l'année</h6></label>
        <input type="text" name="annee"><br>
        <input type="submit" value="valider" name="top">
        </form>
  
    <?php
                    
        if (isset($_GET['error'])) {

            echo '<p style="color:blue">Revoire votre saisie svp </p>';
        }

    ?>
</body>
</html>