<?php
//  session_start();

    function dateValide($j,$m,$a){

        if (is_numeric($a) && is_numeric($m) && is_numeric($j) && $a>0 && $j>=1 && [($j<=30 &&  ($m==4 || $m==2 || $m==6 || $m==8 || $m==9 || $m==11)) || $j<=31 && ($m==3 || $m==5 || $m==7 || $m==8 || $m==10 || $m==12 || $m==1)]) {
            
            $_SESSION['valide']='date valide';

        }
        
        if (is_numeric($a) && is_numeric($m) && is_numeric($j) && $a>0 && $m==2 && $j>=1 && ($j<=28 || ((($a % 4==0 && $a % 100 <>0) || $a % 400==0) &&  $j<=29))) {
            
            $_SESSION['valide']='date valide';


        }
    }

    



    function datePrecedente ($j,$m,$a){
        

    if ($a>0 && $j==1 && ($m==4 || $m==2 || $m==6 || $m==8 || $m==9 || $m==11)) {
        $_SESSION["mP"]=$m-1; 
        $_SESSION["aP"]=$a;
        $_SESSION["jP"]=31;

    }
    if ($a>0 && $j>1 && $j<=31 && ($m==3 || $m==5 || $m==7 || $m==8 || $m==10 || $m==12 || $m==1)) {
        $_SESSION["jP"]=$j-1;
        $_SESSION["mP"]=$m; 
        $_SESSION["aP"]=$a;
    }
    if ($a>0 && $j==1 && ($m==5 || $m==7 || $m==10 || $m==12)) {
         $_SESSION["jP"]=30;
        $_SESSION["mP"]=$m-1;
        $_SESSION["aP"]=$a;

    }
    if ($a>0 && $j>1 && $j<=30 && ($m==4 || $m==6 || $m==9 || $m==11)) {
        $_SESSION["jP"]=$j-1;
        $_SESSION["mP"]=$m; 
        $_SESSION["aP"]=$a;
    }
    if ($a>0 && $m==1 && $j==1) {
        $_SESSION["jP"]=31;
        $_SESSION["mP"]=12;
        $_SESSION["aP"]=$a-1;

    }
    if ($a>0 && $m==2 && $j>1 && $j<=28) {
            $_SESSION["jP"]=$j-1;
            $_SESSION["mP"]=2;
            $_SESSION["aP"]=$a;

    }
    if ($a>0 && $m==3 && $j==1) {
            $_SESSION["jP"]=28;
            $_SESSION["mP"]=2;
            $_SESSION["aP"]=$a;
            
    }
    if ((($a%4==0 && $a%100<>0) || $a%400==0) && $a>0 && $m==2 && $j>1 && $j<=29){
    $_SESSION["jP"]=$j-1;
    $_SESSION["mP"]=2;
    $_SESSION["aP"]=$a;

    }
    if ((($a%4==0 && $a%100<>0) || $a%400==0) && $a>0 && $m==3 && $j==1) {
            
        $_SESSION["jP"]=29;
        $_SESSION["mP"]=2;
        $_SESSION["aP"]=$a;
    }
    echo '<h6>La date précedente est </h6>' .$_SESSION["jP"]." / ". $_SESSION["mP"]." / ". $_SESSION["aP"] .'<br>'; 
    
}




 function dateSuivante ($j,$m,$a){
    

     if ($a>0 && $j==30 && ($m==4 || $m==6 || $m==9 || $m==11)) {
         $_SESSION["jS"]=1;
         $_SESSION["mS"]=$m+1;
         $_SESSION["aS"]=$a;
     }
     if ($a>0 && $j>=1 && $j<30 && ($m==4 || $m==6 || $m==9 || $m==11)) {
        $_SESSION["jS"]=$j+1;
        $_SESSION["mS"]=$m;
        $_SESSION["aS"]=$a;
     }
     if ($a>0 && $j==31 && ($m==5 || $m==3 || $m==7 || $m==8|| $m==10 || $m==1)) {
         $_SESSION["jS"]=1;
         $_SESSION["mS"]=$m+1;
         $_SESSION["aS"]=$a+1;
     }
     if ($a>0 && $j>=1 && $j<31 && ($m==5 || $m==3 || $m==7 || $m==8|| $m==10 || $m==1 || $m==12)) {
        $_SESSION["jS"]=$j+1;
        $_SESSION["mS"]=$m;
        $_SESSION["aS"]=$a;
     }
     if ($a>0 && $m==12 && $j==31) {
        $_SESSION["jS"]=1;
        $_SESSION["mS"]=1;
        $_SESSION["aS"]=$a+1;
     }
     if ((($a%4==0 && $a%100<>0) || $a%400==0) && $m==2 && $j==29) {
         $_SESSION["jS"]=1;
         $_SESSION["mS"]=3;
         $_SESSION["aS"]=$a;
     }
     if ((($a%4==0 && $a%100<>0) || $a%400==0) && $j>=1 && $m==2 && $j<29) {
        $_SESSION["jS"]=$j+1;
        $_SESSION["mS"]=$m;
        $_SESSION["aS"]=$a;
     }
     if (($a%4<>0 || $a%100==0) && $a%400<>0 && $m==2 && $j==28) {
        $_SESSION["jS"]=1;
        $_SESSION["mS"]=3;
        $_SESSION["aS"]=$a;
     }
     if (($a%4<>0 || $a%100==0) && $a%400<>0 && $m==2 && $j>=1 && $j<28) {
        $_SESSION["jS"]=$j+1;
        $_SESSION["mS"]=$m;
        $_SESSION["aS"]=$a;
     }
     echo '<h6>La date suivente est </h6>'.$_SESSION["jS"]." / ". $_SESSION["mS"]." / ". $_SESSION["aS"];
 }


?>