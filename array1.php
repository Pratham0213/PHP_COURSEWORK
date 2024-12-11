<?php 

$Num=array(1,10,9,13);
array_push($Num ,20);
echo $Num[4];

$line="I am here to learn php";
//reverse the line variable using slicing

$reversed_line=substr($line, -3, 1).substr($line, 0, -1);
echo "<br>".$reversed_line;

//reverse the line variable using built-in reverse function


$reversed_line=strrev($line);
echo "<br>".$reversed_line;
//reverse the word learn using slice and the other way too and print the whole sentence where the word learn is only reversed

$sentence="I am here to learn php";
$reversed_sentence=strrev($sentence);
$reversed_words=explode(" ",$reversed_sentence);
$reversed_sentence=implode(" ",array_reverse($reversed_words));
$learn_index=strpos($reversed_sentence, "learn");

$learn_reversed=strrev(substr($reversed_sentence, $learn_index, 4));

echo "<br>".$learn_reversed;




?>