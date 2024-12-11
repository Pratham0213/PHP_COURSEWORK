<?php
$person = array (
    "first_name" => "PRATHAM",
    "last_name" => "THAKUR",
    "course" => "INT220",
    "year" => 4
);

$person["occupation"] = "software engineer";
$person["email"] = "papatera@gmailcom";


$person["course"] = "INT221";


echo "First name: ".$person["first_name"]."<br>";
echo "Last name: ".$person["last_name"]."<br>";
echo "Course: ".$person["course"]."<br>";
echo "Year: ".$person["year"]."<br>";
echo "Occupation: ".$person["occupation"]."<br>";
echo "Email: ".$person["email"]."<br>";


unset($person["email"]);

$keys = array_keys($person);
$values = array_values($person);

echo "keys in the associative array:\n";
print_r($keys);

?>