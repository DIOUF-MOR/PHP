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
        ?>
        <div class="sujet"> 
            <?php echo '<b>Soient ',$Longueur,' et ',$largeur,' la longueure et la largeur générés ;<br> Alors :<br></b>';?>
        </div>

        <div class="impliq"><b>======></b></div>
        
        <div class="resultat">
            <?php
            echo '<b>le perimetre est: </b>('.$Longueur.'+'.$largeur.')*2 = ', perimetre($Longueur,$largeur),'<br>';
            echo '<b>la surface est: </b>'.$Longueur.'*'.$largeur.' = ',surface($Longueur,$largeur),'<br>';
            echo '<b>le diagonale est: </b>sqrt('.$Longueur.'² + '.$largeur.'²) = ', diagonale($Longueur,$largeur);
            ?>
        </div> 
    </div>
    <br>
         <div class="lesBoutons">
            <button > <a href="../EXERCICE1/index.php"><<<<</a></button>
            <button> <a href="../EXERCICE3/index.php">>>>></a></button>
        </div>
    
</body>
</html>