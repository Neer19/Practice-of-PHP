<?php
/*basic of files............
// $x=readfile('file.txt ');
// echo $x;
//readfile("file.txt");
//readfile('devil.jpg');
//readfile("file.html");
*/

$fptr = fopen("file.txt", "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("file.txt"));
fclose($fptr);
echo $content;
?>