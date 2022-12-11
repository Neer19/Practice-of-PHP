<?php
// include '_dp_inc_req1';
require 'dp_inc_req.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($connect, $sql);

$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br>";
}



?>