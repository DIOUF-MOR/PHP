
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO10</title>
</head>
<body>
    <form action="controller.php" method="post" >
    <label for="imp"><h5>Entrer un nombre positif </h5></label>
    <input type="text" name="imp">
    <input type="submit" name="go" value="valide" > <br><br>
    </form>

    <?php
    if (isset($_SESSION['N'])) {
        $n=$_SESSION['N'];
        echo "<b> Les ".$n.' champs sont : '.'<br><br>';
        for ($i=1; $i <=$n ; $i++) { 

            echo 'champ:'.$i.'<input type="text" name="imp"> <br><br>';
            
        }
    }
    
    if (isset($_SESSION['error'])) {
            
        echo "<p style='color:red'>".$_SESSION['error']."</p>";
    }

    session_unset();
    ?>
</body>
</html>