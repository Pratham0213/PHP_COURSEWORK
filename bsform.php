<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary search Form</title>
</head>

<body>
    <h1>Binary search Form</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
    }
    if (empty($number)) {
        echo "Please enter a number.";
        exit;
    }
    ?>

    <input method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Enter a number to search from(1-100): </label>
        <input type="number" id="number" name="number" required> </input><br><br>
    </form>

</body>

</html>