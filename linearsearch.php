<!DOCTYPE html>
<html>
<head>
    <title>Array Search</title>
</head>
<body>
    <h2>Array Search</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                  
        <label for="numbers">Enter numbers separated by commas:</label>
        <input type="text" id="numbers" name="numbers" required><br><br>

        <label for="search_number">Enter a number to search:</label>
        <input type="number" id="search_number" name="search_number" required><br><br>

        <input type="submit" value="Search">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers_input = $_POST["numbers"];
        $search_number = $_POST["search_number"];
        $numbers_array = explode(",", $numbers_input);

        
        $index = array_search($search_number, $numbers_array);

        if ($index !== false) {
            echo "The number $search_number is present at index $index.";
        } else {
            echo "The number $search_number is not present in the array.";
        }
    }
    ?>
</body>
</html>