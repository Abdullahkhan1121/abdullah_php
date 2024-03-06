<?php

    //loop
    //for loop

    for($i = 1 ; $i<=10 ; $i++){
        echo "<br> 7 x $i = " .$i*7; 
    }

    $tablename =18 ;
    for($y = 1 ; $y<=10 ; $y++){
        echo "<br> $tablename x $y = " .$tablename*$y;
    }
    for($e = 0 ; $e <=50 ; $e++){
        for($t = 0 ; $t <$e; $t++){
        echo "🍟";
    }
    echo "<br>";
    }

    //WHILE LOOP
    $tree = 65;
    while($tree<=70){
        echo "<br> Hello While Looop" .$tree;
        $tree++;
    }

    //Do while Loop

    $file = 90;
    do{
        echo "<br> This is Do While Loop" .$file;
        $file++;
    }
    while($file<=93);

?>