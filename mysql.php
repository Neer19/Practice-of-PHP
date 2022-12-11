<?php
echo "Hi! this is neer here....<br>";

//database connection...
$servername="localhost";
$username="root";
$password="";

//connection create....
$connect=mysqli_connect($servername,$username,$password);

//error if not connect

if(!$connect){
    die("failed!.....".mysqli_server_error());
}
else{
    echo "connected......";
}

?>