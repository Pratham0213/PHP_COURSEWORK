<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    
    $reversedString = strrev($inputString);
    
    echo "Original String: $inputString <br>";
    echo "Reversed String: $reversedString <br>";
    
    if ($inputString === $reversedString) {
        echo "The string is a palindrome.";
    } else {
        echo "The string is not a palindrome.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <style>
        body {
            background-color:antiquewhite;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter a String to Check for Palindrome:</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="text" name="inputString" required>
            <button type="submit">Check</button>
        </form>
    </div>
</body>
</html>

