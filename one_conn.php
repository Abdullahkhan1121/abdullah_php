<?php

include("config/one.php");

$sql = "insert into users (name , email , password) values('Dexter' , 'Dexter@gmail.com' , 'apple123')";
$result = $conn->query($sql);

if($result == true){
    echo "<br>Your record has been inserted";
}else{
    echo "<br>No record has been inserted";
}
?>