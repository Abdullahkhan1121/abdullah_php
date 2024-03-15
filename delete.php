<?php

include("config/one.php");

$sql = "delete from users where id = 4";

$result = $conn->query($sql);

if($result == true){
    echo "<br>Your record has been deleted";
}else{
    echo "<br>No record has been deleted";
}
?>