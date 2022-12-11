<?php

function mark($marks){
    $sum=0;
    foreach($marks as $value){
        $sum+=$value;
    }
    return $sum;
}

function avgmark($marks){
    $sum=0;
    $i=1;
    foreach($marks as $value){
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}


$Neer=[93,45,56,78,30,22];
$sumMarks=mark($Neer);
$avgMarks=avgmark($Neer);

echo "The total marks is = $sumMarks <br>";
echo "The avg marks is = $avgMarks";

?>