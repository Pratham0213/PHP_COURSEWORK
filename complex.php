<?php

$library = [
    "Fiction" => [
        "The Great Guy" => ["author" => "Pratham", "year" => 2002],
        "1945" => ["author" => "Mahatma Gandhi", "year" => 1945]
    ],
    "Non-Fiction" => [
        "The Catcher in the Rye" => ["author" => "J.D. Salinger", "year" => 1951],
        "To Kill a Mockingbird" => ["author" => "Harper Lee", "year" => 1960]
    ],
    "Science Fiction" => [
        "The Selfish Gene" => ["author" => "Charles Dawkins", "year" => 1971],
        "The Origin of Species" => ["author" => "Herbert S. Poe", "year" => 1859]
    ]
];

// Printing the library
print_r($library);
echo PHP_EOL;

// Searching for a book in a specific genre
function searchBook($library, $genre, $bookTitle) {
    if (array_key_exists($genre, $library)) {
        if (array_key_exists($bookTitle, $library[$genre])) {
            return $library[$genre][$bookTitle];
        } else {
            return "The book you are looking for does not exist in this genre." . PHP_EOL;
        }
    } else {
        return "The genre you are looking for does not exist in the library." . PHP_EOL;
    }
}

$result = searchBook($library, "Fiction", "The Great Guy");
print_r($result);
echo PHP_EOL;

// Create a 2D array and convert it into a 1D array
$twoDArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$oneDArray = array_merge(...$twoDArray);
print_r($oneDArray);
echo PHP_EOL;



function rotateArray($array) {
    $firstElement = array_shift($array);
    array_push($array, $firstElement);
    return $array;
}

$array = [1, 2, 3, 4, 5];
$rotatedArray = rotateArray($array);
print_r($rotatedArray);

function flattenArray($array) {
    $result = [];
    foreach ($array as $value) {
        if (is_array($value)) {
            $result = array_merge($result, flattenArray($value));
        } else {
            $result[] = $value;
        }
    }
    return $result;
}

$array = [1, 2, 3, [4, [5]]];
$flattenedArray = flattenArray($array);
print_r($flattenedArray);

?>
