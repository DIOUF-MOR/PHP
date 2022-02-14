<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO6</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

       <h6>Résolution d'equation </h6>
    <form class="fmlre" method="POST" action="controller.php">
        <label for="coefa">le coeficient de X²</label><br>
        <input class="form1" type="text" name="coefa"><br><br>
        <label for="coefb">le coeficient de X</label><br>
        <input class="form1" type="text" name="coefb"><br><br>
        <label for="coefc">le coef independent</label><br>
        <input class="form1" type="text" name="coefc"><br><br>
        <input type="submit"  value="valider" name="btn"><br>
    </form>
    
   <?php 
        
       if (isset($_ESSION['error'])){

           echo "<h6 style='color:red'>".$_ESSION['inf']."</h6>";
       }

       if (!empty($_SESSION['x0'])) {

           echo "<h6 style='color:blue'>l equation admet une solution double X0 =".$_SESSION['x0']."</h6>";
       }

       if (!empty($_SESSION['x1'])) {
           
        echo "<h6 style='color:blue'>l equation admet  deux solutions: <br><br> X1 = ".$_SESSION['x1']." <br><br> X2=".$_SESSION['x2'];
       }

       if (!empty($_SESSION['x'])) {
           
        echo 'Lequation est du premier degré et sa solution est: <br> X = '.$_SESSION['x'];
       }

       if (!empty($_SESSION['o'])) {
           
        echo "<h6 style='color:red'>l equation n admet pas de  solution </h6>";
       }
       
       if (isset($_SESSION['error'])) {
           
        echo "<h6 style='color:red'>".$_SESSION['error']."</h6>";
       }

       session_unset() ;
   ?>
</body>
</html>

