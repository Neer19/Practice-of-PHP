<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "neer";

// Create a connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$connect){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
?>