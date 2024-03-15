<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "abd";

$conn = new mysqli($serverName , $userName , $password , $dbName);

if($conn == true){
    echo "<br> CONNECTION SUCCESSFUL";
} else{
    echo "<br> CONNECTION FAILED";
}


?>