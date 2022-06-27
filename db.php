<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "todolist";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    echo "Failed to Connect! " . mysqli_connect_error();
}

?>