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

// Variables to be inserted into the table
$name = "Vikrant";
$destination = "Russia";

// Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($connect, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($connect);
}
?>
