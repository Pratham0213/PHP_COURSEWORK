<!--createa a function that will calculate the compund intrest with 15 percent and pi 1 7700 nad pi2 13000-->
<?php
function calculateCompoundInterest($principal, $rate, $time) {
  
    $rate = $rate / 100;
    $amount = $principal * pow((1 + $rate), $time);
  
    $compoundInterest = $amount - $principal;
  
    return $compoundInterest;
  }
  
  $principal1 = 7700;
  $principal2 = 13000;
  $rate = 15;
  $time = 1;
  
  $interest1 = calculateCompoundInterest($principal1, $rate, $time);
  $interest2 = calculateCompoundInterest($principal2, $rate, $time);
  
  echo "Compound Interest for Principal 1: " . $interest1 . PHP_EOL;
  echo "Compound Interest for Principal 2: " . $interest2 . PHP_EOL;
  
  
function calculateDiscount($mrp, $discountPercentage = 10) {
  $discountAmount = ($mrp * $discountPercentage) / 100;
  $finalPrice = $mrp - $discountAmount;
  return $finalPrice;
}

$mrp1 = 6000;
$mrp2 = 10000;
$mrp3 = 15000;

echo calculateDiscount($mrp1) . PHP_EOL; 
echo calculateDiscount($mrp2) . PHP_EOL; 
echo calculateDiscount($mrp3, 15) . PHP_EOL;
?>