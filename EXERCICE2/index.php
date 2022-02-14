<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO2</title>
</head>
<body>
    <?php
    include 'fonctions.php';
    $Longueur=rand(1,10);
    $largeur=rand(1,10);
    echo 'Soient L = ',$Longueur,' et l = ',$largeur,' la longueure et la largeur générés ;<br> Alors :<br>';
    echo 'le perimetre est égale à ', perimetre($Longueur,$largeur),'<br>';
    echo 'la surface est égale à ',surface($Longueur,$largeur),'<br>';
    echo 'le diagonale est egale à ', diagonale($Longueur,$largeur);
    ?>
</body>
</html>