<?php

$sentence="Computer engineering is very big";
echo $sentence;
echo "<br>";

echo "the length of" ."the string is" . strlen($sentence);    
echo "<br>";
echo strrev($sentence);
echo "<br>";
echo str_word_count($sentence);
echo "<br>";
echo strpos($sentence,"big");
echo "<br>";
echo str_replace("very","highly",$sentence);
echo "<br>";
echo str_repeat($sentence,110);
echo "<br>";
echo "</pre>";
echo rtrim("        so hello!          ");
echo "<br>";
echo ltrim("      so hello!        ");
echo "</pre>";



?>