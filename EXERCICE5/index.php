<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO5</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">
</head>
<body>
    <div class="css">
    <?php
    include "fonctions.php";
    $abcisse1=rand(1,10);
    $ordonné1=rand(1,10);
    $abcisse2=rand(1,10);
    $ordonné2=rand(1,10);
    echo 'Soient A(',$abcisse1,",",$ordonné1,') et B(',$abcisse2,",",$ordonné2,') deux points <br>Alors :<br>';
    echo 'La distance entre A et B est égale à :   ', distance($abcisse1,$ordonné1,$abcisse2,$ordonné2);
    ?>
    </div>
    <br>
    <div class="lesBoutons">
            <button > <a href="../EXERCICE4/index.php"><<<<</a></button>
            <button> <a href="../EXERCICE6/index.php">>>>></a></button>
        </div>
    
</body>
</html>