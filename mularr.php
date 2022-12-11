<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

for ($i=0 ; $i< count($cars); $i++ ) { 
    for ($j=0;$j <count($cars[$i]) ; $j++) { 
        echo $cars[$i][$j];
        echo " ";
    }
    echo "<br>";
}
//echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
?>