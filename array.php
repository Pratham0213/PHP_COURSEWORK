<?php

//create an array and do all the operations possible

$numbers = array(1,2,3,4,5,6,7,8,9,10);

//find the sum of all the elements

$sum = array_sum($numbers);

echo "Sum of all numbers: ". $sum;

//find the average of all the elements

$average = $sum / count($numbers);

echo "<br>Average of all numbers: ". $average;

//find the maximum element

$max = max($numbers);

echo "<br>Maximum number: ". $max;

//find the minimum element

$min = min($numbers);

echo "<br>Minimum number: ". $min;

//find the median of all the elements

$numbers_sorted = sort($numbers);

$median = $numbers[(count($numbers) - 1) / 2];

echo "<br>Median of all numbers: ". $median;

//find the mode of all the elements

$mode = array_count_values($numbers);

arsort($mode);

echo "<br>Mode(s) of all numbers: ";

foreach($mode as $key => $value){
    echo $key. " (". $value. " times), ";
}

//find the range of all the elements

$range = $max - $min;

echo "<br>Range of all numbers: ". $range;

//find the standard deviation of all the elements

$variance = array_sum(array_map(function($number) use ($average) {
    return pow($number - $average, 2);
}, $numbers)) / count($numbers);

$standard_deviation = sqrt($variance);

echo "<br>Standard deviation of all numbers: ". $standard_deviation;

//find the variance of all the elements

echo "<br>Variance of all numbers: ". $variance;

//find the sum of squares of all the elements

$sum_of_squares = array_sum(array_map(function($number) {
    return pow($number, 2);
}, $numbers));

echo "<br>Sum of squares of all numbers: ". $sum_of_squares;

//find the product of all the elements

$product = array_product($numbers);

echo "<br>Product of all numbers: ". $product;

//find the cumulative sum of all the elements

$cumulative_sum = array_reduce($numbers, 'array_sum');

echo "<br>Cumulative sum of all numbers: ". $cumulative_sum;

//find the cumulative product of all the elements

$cumulative_product = array_reduce($numbers, 'array_product');

echo "<br>Cumulative product of all numbers: ". $cumulative_product;

//find the geometric mean of all the elements

$geometric_mean = pow(array_product($numbers), 1 / count($numbers));

echo "<br>Geometric mean of all numbers: ". $geometric_mean;

//find the harmonic mean of all the elements

$harmonic_mean = count($numbers) / array_sum(array_map(function($number) {
    return 1 / $number;
}, $numbers));

echo "<br>Harmonic mean of all numbers: ". $harmonic_mean;

//find the median of the first half of the elements

$first_half_numbers = array_slice($numbers, 0, count($numbers) / 2);

$median_first_half = array_reduce($first_half_numbers, 'array_sum') / count($first_half_numbers);

echo "<br>Median of the first half of numbers: ". $median_first_half;

//find the median of the second half of the elements

$second_half_numbers = array_slice($numbers, count($numbers) / 2);

$median_second_half = array_reduce($second_half_numbers, 'array_sum') / count($second_half_numbers);

echo "<br>Median of the second half of numbers: ". $median_second_half;

//find the mode of the first half of the elements

$mode_first_half = array_count_values($first_half_numbers);

arsort($mode_first_half);

echo "<br>Mode(s) of the first half of numbers: ";

foreach($mode_first_half as $key => $value){
    echo $key. " (". $value. " times), ";
}

//find the mode of the second half of the elements

$mode_second_half = array_count_values($second_half_numbers);

arsort($mode_second_half);

echo "<br>Mode(s) of the second half of numbers: ";




?>