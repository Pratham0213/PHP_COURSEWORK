<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the bakery table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS bakery (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(30) NOT NULL UNIQUE,
    quantity INT(3) NOT NULL,
    price DECIMAL(5,2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table bakery created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Define the items to add or update
$items = [
    ['item' => 'bread', 'quantity' => 10, 'price' => 0.50],
    ['item' => 'cheese', 'quantity' => 5, 'price' => 1.00],
    ['item' => 'milk', 'quantity' => 20, 'price' => 1.20]
];

foreach ($items as $product) {
    $item = $product['item'];
    $quantity = $product['quantity'];
    $price = $product['price'];

    // Check if the item already exists in the table
    $checkSql = "SELECT * FROM bakery WHERE item = '$item'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Item exists, so update it
        $updateSql = "UPDATE bakery SET quantity = $quantity, price = $price WHERE item = '$item'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Record for '$item' updated successfully<br>";
        } else {
            echo "Error updating record: " . $conn->error . "<br>";
        }
    } else {
        // Item does not exist, so insert it
        $insertSql = "INSERT INTO bakery (item, quantity, price) VALUES ('$item', $quantity, $price)";
        if ($conn->query($insertSql) === TRUE) {
            echo "Record for '$item' inserted successfully<br>";
        } else {
            echo "Error inserting record: " . $conn->error . "<br>";
        }
    }
}

// Display the bakery table
$sql = "SELECT * FROM bakery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Bakery Inventory</h2>";
    echo "<table><tr><th>ID</th><th>Item</th><th>Quantity</th><th>Price</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["item"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["price"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Total sales calculation
$sql = "SELECT SUM(price * quantity) as total_sales FROM bakery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h3>Total Sales: " . $row["total_sales"] . " INR</h3>";
} else {
    echo "Total Sales: 0 INR";
}

//orderby the items in descending order

$sql = "SELECT * FROM bakery ORDER BY quantity DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Bakery Inventory (Ordered by Quantity)</h2>";
    echo "<table><tr><th>ID</th><th>Item</th><th>Quantity</th><th>Price</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "</td><td>". $row["item"]. "</td><td>". $row["quantity"]. "</td><td>". $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
//items with 'a' in their name

$sql = "SELECT * FROM bakery WHERE item LIKE '%a%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Bakery Inventory (Items with 'a' in their name)</h2>";
    echo "<table><tr><th>ID</th><th>Item</th><th>Quantity</th><th>Price</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "</td><td>". $row["item"]. "</td><td>". $row["quantity"]. "</td><td>". $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
