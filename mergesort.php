<!DOCTYPE html>
<html>
<head>
    <title>Array Merge and Elimination</title>
</head>
<body>
    <h2>Array Merge and Elimination</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="array1">Enter elements for array 1 (separated by commas):</label>
        <input type="text" id="array1" name="array1" required><br><br>

        <label for="array2">Enter elements for array 2 (separated by commas):</label>
        <input type="text" id="array2" name="array2" required><br><br>

        <input type="submit" value="Merge Arrays">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array1_input = $_POST["array1"];
        $array2_input = $_POST["array2"];

        $array1 = validateAndConvertArray($array1_input);
        $array2 = validateAndConvertArray($array2_input);

        if ($array1 !== false && $array2 !== false) {
            
            $merged_array = array_merge($array1, $array2);

            $unique_array = array_unique($merged_array);
            $merged_string = implode("", $unique_array);
            echo "<h2>Merged Array:</h2>";
            echo $merged_string;
        } else {
            echo "Invalid input. Please enter valid numbers separated by commas.";
        }
    }

    function validateAndConvertArray($array_input) {
      
        if (empty($array_input)) {
            return false;
        }
        $array = explode(",", $array_input);

        foreach ($array as $element) {
            if (!is_numeric($element)) {
                return false;
            }
        }

        return $array;
    }
    ?>
</body>
</html>