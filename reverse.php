<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    
    $reversedString = strrev($inputString);
    
    echo "Original String: $inputString <br>";
    echo "Reversed String: $reversedString";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reversal</title>
</head>
<body>
    <h2>Enter a String to Reverse:</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="inputString" required>
        <button type="submit">Reverse</button>
    </form>
</body>
</html>