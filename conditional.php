<?php

$age = 10;
    if($age >=20 ){
        echo "You can drive a car";
    }
    else{
        echo "<br>You can not drive a car";
    }
    echo  "<br>";
    $iscnic = true;
    $age = 50;
     
    if($age >=20){
        echo "<br> You can Drive a Car";
        if ($iscnic === true ){
            echo "<br>you can take my car";
        }
        else{
            echo "<br>Just Go Home KID!!!";
        }
    }
    else {
        echo "<br>You can not drive a Car";
    }

    for ($myNum = 0; $myNum <=50; $myNum++)
    if($myNum%2==0){
        echo "<br>The Number Is Even" .$myNum;
    }
    else {
        echo "<br>The Number is Odd"  .$myNum;
    }

?>