<?php

$date=date("j r");
$date1=date("dS F Y");

echo "the date is= $date <br>";

echo "the date is= $date1";
echo "<br>";
echo "The time is " . date("h:i:sa");
echo "<br>";

//Syntax
//mktime(hour, minute, second, month, day, year)
$d=mktime(11, 14, 54, 8, 12, 2022);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

?>