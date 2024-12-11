<?php 

$codes = array("AK", "KO", "BA");
$codes1 = ["AK", "KO", "BA"];
$number = 10.23456789;

var_dump($codes) ;
var_dump($number) ;
echo gettype($number) ;
// create an array and then slice it using filter

$numbers = array(1,2,3,4,5,6,7,8,9,10);
$filtered_numbers = array_filter($numbers, function($number) {
    return $number % 2 == 0;

});
 echo($number);

?>