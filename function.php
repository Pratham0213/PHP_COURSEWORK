<?php
function myFunction() {
    $myVar = "Hello, World!";
    echo "<br>";
    return $myVar;
}

echo myFunction(); // Outputs: Hello, World!

function myFunction2($myVar) {
    echo $myVar; 
    echo "<br>";// Outputs: 13
}

function myFunction1(&$myVar) {
    $myVar = 23; // Assign a value to the variable
    echo $myVar; // Outputs: 23
    echo "<br>";
}

$myVar = 13;
myFunction1($myVar);
myFunction2($myVar);


//create a function and concatinate a string and a number

function concatenate($string, $number) {
    return $string. $number;
}

echo concatenate("PHP has course code ", 220 );
echo "<br>"; // Outputs: Hello123


function myFunction23() {
    // No return statement
    
}

$result = myFunction23();
var_dump($result);

// Outputs: NULL

//calculate the cost price of the book having mrp as 2204 and default discount is 10%

function calculateCostPrice($mrp, $discountPercentage = 10) {
    $discountAmount = ($mrp * $discountPercentage) / 100;
    $costPrice = $mrp - $discountAmount;
    return $costPrice;
   
}
echo "<br>";
echo calculateCostPrice(2285); 

//create a function and print the first 100 prime numbers

function setheight($minheight){
    echo"The height is :$minheight";
    echo "<br>";
}





?>