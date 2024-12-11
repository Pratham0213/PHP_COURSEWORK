<?php
$fullNameError = $emailError = $commentError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = filter_input(INPUT_POST, "full_name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $comment = filter_input(INPUT_POST, "comment", FILTER_SANITIZE_STRING);

    if (empty($fullName)) {
        $fullNameError = "Full name is required.";
    }

    if (empty($email)) {
        $emailError = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
    }

    if (empty($comment)) {
        $commentError = "Comment is required.";
    }

    if (empty($fullNameError) && empty($emailError) && empty($commentError)) {
        echo "Form submitted successfully!<br>";
        echo "Full Name: " . htmlspecialchars($fullName) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Comment: " . htmlspecialchars($comment);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
    <h2>Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" id="full_name">
        <span class="error"><?php echo $fullNameError; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <span class="error"><?php echo $emailError; ?></span>
        <br><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment"></textarea>
        <span class="error"><?php echo $commentError; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>