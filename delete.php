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


$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 13";
$result = mysqli_query($connect, $sql);
$aff = mysqli_affected_rows($connect);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($connect);
    echo "Not Delete successfully due to this error --> $err";
}

?>