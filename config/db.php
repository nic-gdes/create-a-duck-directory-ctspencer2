<?php

//Create connection to DB with mysqli_connect
$conn = mysqli_connect("db:3306", "db", "db", "db");
//Verify connection with mysqli_connect_errno and mysqli_connect_error
if (mysqli_connect_errno()) {
echo "Connection error: " . mysqli_connect_error();
}
?>