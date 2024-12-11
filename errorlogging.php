php.ini 
php productive file
<?php
function customError($errorno,$errstr){
    echo "Error number: ".$errorno."<br>";
    echo "Error message: ".$errstr."<br>";
    echo "Script: ".basename($_SERVER["SCRIPT_FILENAME"])."<br>";
    echo "Line: ". $_SERVER["LINENO"]."<br>";


}
?>
<?php
function divideByTwo($number) {
    if ($number % 2 != 0) {
        echo "Error: The number must be even for division by 2.";
        return;
    }

    return $number / 2;
}

$number = (int)readline("Enter a number: ");


try {
    $result = divideByTwo($number);
    echo "The result of dividing $number by 2 is: $result";
} catch (ErrorException $e) {
    echo "Error: " . $e->getMessage();
}