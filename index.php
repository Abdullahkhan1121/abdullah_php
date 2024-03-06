<?php

   $name = "hello" ;   //STRING
   $age = 50 ;      //NUMBER
   $iscnic = true ;   //BOOLEAN
   $marks = 85.4 ;  //FLOAT

   echo "$name";
   echo "<br> $age" ;

   echo "<br> $iscnic <br> $marks";

   //ARITHMETIC OPERATIONS

   $a = 25;
   $b = 10;
   $c = $a + $b;
   $d = $a - $b;
   $e = $a * $b;
   $f = $a / $b;
   $g = $a % $b;

   echo "<br> The sum of $a + $b is :" .$c;
   echo "<br> The sub of $a - $b is :" .$d;
   echo "<br> The mul of $a * $b is :" .$e;
   echo "<br> The div of $a / $b is :" .$f;
   echo "<br> The modulus of $a % $b is :" .$g;

   //INCREMENT
   //POST
   $apple = 40;
   echo "<br> The increment of this number is :" .$apple++;
   echo "<br> ".$apple;
   //PRE
   echo "<br> the increment of this number is : " .++$apple;

   $banana = 209;
   
   echo "<br>  " .$banana;
   $banana -=2;
   echo "<br>  " .$banana;
   $banana +=8;
   echo "<br>  " .$banana;
   $banana -=15;
   echo "<br>  " .$banana;
   $banana -=95;
   echo "<br>  " .$banana;


?>