<?php

// Connecting to a database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "neha_pathak_068";

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);



// Die if connection not successfull
if(!$conn){
    die("<br> Sorry connection failed" . mysqli_connect_error());
}

?>