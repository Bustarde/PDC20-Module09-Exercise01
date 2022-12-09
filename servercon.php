<?php
$dbconnect = mysqli_connect("localhost", "pdc20user", "123", "pdc20");
if (mysqli_connect_error()){
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    die();
}
?>
