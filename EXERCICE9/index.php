<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO9</title>
</head>
<body>
    <form action="controller.php" method="post">
        <label for="sy"><h5>Entrer un nombre positif </h5></label>
        <input type="text" name="sy">
        <input type="submit" name="oui" value="Entrer">

    </form>

    <?php

    if (isset($_SESSION["error"])) {

        echo "<p style='color:red'>".$_SESSION['error']."</p>";
    }

    if(isset($_SESSION['n'])){

        $n = $_SESSION['n'];

        echo "La table ".$n." est :<br>";

        for ($i=1; $i <= 10; $i++) { 
            
            echo $n.'X'.$i .'=' .$n*$i.'<br>';
    
        }

    }
        session_unset();
        
    ?>
</body>
<?php
    // if () {
        # code...
    // }
?>
</html>