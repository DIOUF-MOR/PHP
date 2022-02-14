<?php
    session_start();

     include 'fonctions.php';

    if (isset($_POST['btn'])) {

        $_SESSION['coefa'] = $_POST['coefa'];
        $_SESSION['coefb'] = $_POST['coefb'];
        $_SESSION['coefc'] = $_POST['coefc'];

        $a=$_SESSION['coefa'];
        $b=$_SESSION['coefb'];
        $c=$_SESSION['coefc'];

        $error=[];

        if (((!empty($a) || $a==0) && is_numeric($a)) && (((!empty($b) || $b==0)) && is_numeric($b)) && (((!empty($c) || $c==0)) && is_numeric($c))) 
        {
            if ($a<>0) {

                solutions_de_l_equation($a,$b,$c,$x0,$x1,$x2,$x,$o);       

                $_SESSION['x0'] =$x0;

                $_SESSION['x1'] =$x1;

                $_SESSION['x2'] =$x2;

                $_SESSION['x'] =$x;

                $_SESSION['o']=$o;

                header('location:index.php');

            } else{
                
                if ($b==0 && $c==0) {

                    $_SESSION['error']='Lequation admet une infinité de solutions';
                }
                if ($b==0 && $c<>0) {
                    
                    $_SESSION['error']=' Lequation admet pas de solution ';
                }
                if ($b<>0 && ($c==0 || $c<>0)) {
                    $_SESSION['error']=' Lequation est du premier degré et sa solution est:<br> X = '.-$c/$b;
                }

                header('location:index.php');
            }
            
            
        }else {
            if (empty($a) || empty($b) || empty($c)) {

                $_SESSION['error']='veuiller remplir tous les champs';

            } else {

                $_SESSION['error']='veuiller saisir des nombres';
            }
            
            header('location:index.php');

        }
    }
   
?>