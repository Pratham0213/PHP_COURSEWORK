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
        <br>
        <label for="inputName">Regestration</label>
        <input type="Integer" name="Reg" id="Reg_id">
        <br>

        <label for="inputspecial">Specialization</label>
        <input type="text" name="inputspecial" id="inputspecial">
        <br>

        <input type="submit" value="SUBMIT">

    </form>
</body>

</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h2>Student Form</h2>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="registration_number">Registration Number:</label>
        <input type="text" id="registration_number" name="registration_number" required><br><br>

        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" required><br><br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <input type="submit" value="Submit"><br>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = $_POST["name"];
    $registration_number = $_POST["registration_number"];
    $specialization = $_POST["specialization"];
    $date_of_birth = $_POST["date_of_birth"];
    
    echo "Name: " . $name . "<br>";
    echo "Registration Number: " . $registration_number . "<br>";
    echo "Specialization: " . $specialization . "<br>";
    echo "Date of Birth: " . $date_of_birth;
}
?>
</body>
</html> -->