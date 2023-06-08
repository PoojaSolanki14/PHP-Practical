<?php
$str ="This is a string";
echo $str;

$str_len=strlen($str);
echo "<br>";
//for concatination you can use .(dot) or ,(comma) as well
echo "The length of the string is : ",$str_len."Thank You";
echo "<br>";
echo "The number of words in this string is : ",str_word_count($str);
echo "<br>";
echo "The reverse string  is : ",strrev($str);
echo "<br>";
echo "Search : ",strpos($str,"string");
echo "<br>";
echo "Replace the word in the given string : ",str_replace("is","at",$str);
?>