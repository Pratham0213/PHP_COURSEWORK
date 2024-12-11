<!DOCTYPE html>
<html>
<head>
    <title>Online Bookstore</title>
<!DOCTYPE html>
<html>

<head>
    <title>Online Bookstore</title>
    <style>
        title{
            font-size: 36px;
            text-align: center;
            margin-bottom: 40px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Online Bookstore</h1>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $bookTitle = $_POST["bookTitle"];
        $quantity = $_POST["quantity"];
        $shippingAddress = $_POST["shippingAddress"];
        $deliveryDate = $_POST["deliveryDate"];
        $paymentMethod = $_POST["paymentMethod"];

        if (empty($name) || empty($email) || empty($bookTitle) || empty($quantity) || empty($shippingAddress) || empty($deliveryDate) || empty($paymentMethod)) {
            echo "Please fill in all required fields.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {
            echo "Form submitted successfully!";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="bookTitle">Book Title:</label>
        <input type="text" id="bookTitle" name="bookTitle" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        <label for="shippingAddress">Shipping Address:</label><br>
        <textarea id="shippingAddress" name="shippingAddress" required></textarea><br>
        <label for="deliveryDate">Delivery Date:</label>
        <input type="date" id="deliveryDate" name="deliveryDate"  required><br><br>
        <label for="paymentMethod">Payment Method:</label>
        <select id="paymentMethod" name="paymentMethod" required>
            <option value="creditCard">select</option>
            <option value="creditCard">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="cod">Cash on Delivery</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>