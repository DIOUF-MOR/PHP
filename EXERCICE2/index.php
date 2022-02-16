<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO2</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">
</head>
<body>
    <div class="css">
    <?php
    include 'fonctions.php';
    $Longueur=rand(1,10);
    $largeur=rand(1,10);
    echo 'Soient L = ',$Longueur,' et l = ',$largeur,' la longueure et la largeur générés ;<br> Alors :<br>';
    echo 'le perimetre est égale à ', perimetre($Longueur,$largeur),'<br>';
    echo 'la surface est égale à ',surface($Longueur,$largeur),'<br>';
    echo 'le diagonale est egale à ', diagonale($Longueur,$largeur);
    ?>
    </div>
    <br>
         <div class="lesBoutons">
            <button > <a href="../EXERCICE1/index.php"><<<<</a></button>
            <button> <a href="../EXERCICE3/index.php">>>>></a></button>
        </div>
    
</body>
</html>