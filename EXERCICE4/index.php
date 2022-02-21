<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO4</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">
</head>
<body>
    <div class="css">
        <?php
            include "fonctions.php";
            $nmbre1=rand(1,10);
            $nmbre2=rand(1,10);
        ?>
        <div class="sujet">
            <?php echo"<b>voilà les deux nombres </b><br>".$nmbre1." et ".$nmbre2;?>
        </div>
        <div class="impliq"><b>======></b></div>
        <div class="resultat">
            <?php
            echo "<b>leur Permutation est :<br>". permutation( $nmbre1,$nmbre2)."</b>";
            ?>
        </div>
    </div>
    <br>
    <div class="lesBoutons">
            <button > <a href="../EXERCICE3/index.php"><<<<</a></button>
            <button> <a href="../EXERCICE5/index.php">>>>></a></button>
        </div>
   
</body>
</html>