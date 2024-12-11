<?php

$fruits=array("Apple","Banana","Cherry");

//adding elements to array
$fruits[]="Date";
array_push($fruits,"Elderberry");

//removing elements from the array
unset($fruits[1]);  //Removes "Banana"

//Iterating over the array
echo "Fruits in the array:\n";
foreach ($fruits as $fruit){
    echo $fruit."\n";
}

//checking if an element exists in the array
if(in_array("Cherry",$fruits)){
    echo "Cherry is in the array.\n";}
    else{
        echo "Cherry is not in the array.\n";
    }

    //getting the length of the array
    $length =count($fruits);
    echo "The number of fruits in the array is: $length\n";

    //sorting the array
    sort($fruits);
    echo "The sorted array in the array:\n";

?>