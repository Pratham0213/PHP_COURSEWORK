//create a form ask for information from user use get and post method handle the information and validate the information using php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <?php
    if (isset($_GET["name"])) {
        echo "<p>hi," . $_GET["name"] . "</p>";
    }

    ?>
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="inputName">Name</label>
        <input type="text" name="inputName" id="inputName">
        <input type="submit" value="SUBMIT">

    </form>
</body>

</html>