<?php
session_start();
include 'fonctions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 12</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>

    <form method="POST" action="controller.php">
        <select name="lang" >
            <option value=""></option>
            <option value="1">FRANCAIS</option>
            <option value="2">ANGLAIS</option>
        </select> <br>
        <input type="submit" value="TRADUIRE" name="traduit">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">

    </form>

    <div class="css">
        <?php
            if (isset($_SESSION['L'])) {

                afficheurTab($_SESSION['L'],3);
            }

            if (isset($_SESSION)) {
                
                unset($_SESSION['L']);
            }
        ?>
    </div>
    <div class="lesBoutons">
        <button > <a href="../EXERCICE11/index.php"><<<<<</a></button>
        <button> <a href="../EXERCICE1/index.php">>>>>></a></button>
    </div>

</body>
</html> 