<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO3</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="../cssGlobal/styleGlobal.css">
</head>
<body>
    <div class="css">
<?php
 include 'fonctions.php';
$nmbre1=rand(1,10);
$nmbre2=rand(1,10);
echo 'Soit A = ',$nmbre1,' et B = ',$nmbre2,' les deux  nombres générés <br> Alors : <br>';
echo 'La somme A+B = ', somme ($nmbre1,$nmbre2),'<br>';
echo exponentiel ($nmbre1,$nmbre2),'<br>';
echo 'La difference A-B = ',  difference ($nmbre1,$nmbre2),'<br>';
echo 'Le produit A*B = ', produit($nmbre1,$nmbre2),'<br>';
echo 'Le modulo A mod B = ', modulo ($nmbre1,$nmbre2),'<br>';
echo 'La division de A par B = ', division ($nmbre1,$nmbre2),'<br>';
echo carré($nmbre1,$nmbre2);
 ?>
 </div>
 <br>
        <div class="lesBoutons">
            <button > <a href="../EXERCICE2/index.php"><<<<</a></button>
            <button> <a href="../EXERCICE4/index.php">>>>></a></button>
        </div>

</body>
</html>
