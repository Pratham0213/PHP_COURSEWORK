<!DOCTYPE html>

<html lang="en">

<head>

    <title>Example of PHP GET method</title>

</head>

<body>

    <?php

    if (isset($_GET["name"])) {

        echo "<p>Hi, " . $_GET["name"] . "</p>";
    }

    ?>

    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <label for="inputName">Name:</label>

        <input type="text" name="name" id="inputName">

        <input type="submit" value="Submit">

    </form>
    
</body>
    <!-- <style>
        .square {
            width: 50px;
            height: 50px;
            background-color: blue;
        }

        .circle {
            border-radius: 100%;
        }
    </style>

    <div class="square circle"></div> -->



</html>