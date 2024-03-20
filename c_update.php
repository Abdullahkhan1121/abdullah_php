<?php
include("config/one.php");

$sql = "update users set name = 'Harry' where id = 18 ";
$result = mysqli_query($conn , $sql);

?>