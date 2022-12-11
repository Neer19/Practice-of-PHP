<?php
/*
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/


$x=55;
$y=5;

//1. Arithmetic Operators
echo "Result =" .($x + $y) . "<br>";
echo "Result =" .($x - $y) . "<br>";
echo "Result =" .($x * $y) . "<br>";
echo "Result =" .($x / $y) . "<br>";
echo "Result =" .($x % $y) . "<br>";
echo "Result =" .($x ** $y). "<br>";

//2. Assignment Operators

$x+=7;
echo "The value of x is " . $x . "<br>";
$x*=7;
echo "The value of x is " . $x . "<br>";
$x-=7;
echo "The value of x is " . $x . "<br>";
$x/=7;
echo "The value of x is " . $x . "<br>";
$x%=4;
echo "The value of x is " . $x . "<br>";

//3. Comparison Operators
$a=2;
$b=4;

echo "for a==b,result is ";
echo var_dump($a==$b);
echo "<br>";

echo "for a>b,result is ";
echo var_dump($a>$b);
echo "<br>";

echo "for a<b,result is ";
echo var_dump($a<$b);
echo "<br>";

echo "for a>=b,result is ";
echo var_dump($a>=$b);
echo "<br>";

echo "for a<=b,result is ";
echo var_dump($a<=$b);
echo "<br>";

echo "for a<>b,result is ";
echo var_dump($a<>$b);
echo "<br>";


//4. Logical Operators
$w=true;
$z=false;

echo "for w and z,result is ";
echo var_dump($w and $z);
echo "<br>";

echo "for w or z,result is ";
echo var_dump($w or $z);
echo "<br>";





?>