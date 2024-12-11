<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mobile_number">Mobile Number:</label>
        <input type="tel" id="mobile_number" name="mobile_number" pattern="[0-9]{10}" required><br><br>

        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date" min="<?php echo date('Y-m-d'); ?>" required><br><br>

        <label for="number_of_attendance">Number of Attendance:</label>
        <input type="number" id="number_of_attendance" name="number_of_attendance" required><br><br>

        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $mobile_number = $_POST["mobile_number"];
        $event_date = $_POST["event_date"];
        $number_of_attendance = $_POST["number_of_attendance"];
        $comments = $_POST["comments"];

        if (strlen($mobile_number) != 10) {
            echo "<p>Invalid mobile number. Please enter a 10-digit number.</p>";
        } elseif (strtotime($event_date) <= time()) {
            echo "<p>Event date must be in the future.</p>";
        } else {
            echo "<p>Registration successful!</p>";
            echo "<p>Full Name: " . htmlspecialchars($full_name) . "</p>";
            echo "<p>Email: " . htmlspecialchars($email) . "</p>";
            echo "<p>Mobile Number: " . htmlspecialchars($mobile_number) . "</p>";
            echo "<p>Event Date: " . htmlspecialchars($event_date) . "</p>";
            echo "<p>Number of Attendance: " . htmlspecialchars($number_of_attendance) . "</p>";
            echo "<p>Comments: " . htmlspecialchars($comments) . "</p>";
        }
    }
    ?>
</body>
</html>
