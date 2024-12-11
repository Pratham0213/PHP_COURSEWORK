<?php
$name=array("Manoj","Rahul","pratham","Prakash");
$marks=array("49","57","64","63");

$c=array_combine($name,$marks);
print_r($c);

//erite the same code for some courses
echo"<br>";
$course=array("math","Science","English");
$marks=array("80","90","75");

$d=array_combine($course,$marks);
print_r($d);
//write code to reverse an array

echo"<br>";
$arr=array(1,2,3,4,5);
$rev=array_reverse($arr);
print_r($rev);
//write code to remove duplicate elements from an array

echo"<br>";
$arr=array(1,2,3,3,4,5,5,6);
$unique=array_unique($arr);
print_r($unique);
echo"<br>";
 $slicingarray=array("a"=>"red","b"=>"bred","c"=>"cred","d"=>"dred","e"=>"ered");
 print_r($slicingarray);
 echo"<br>";
 array_splice($slicingarray,1,5);


?>