<?php
$servername = "localhost"; 
$username = "pratham";     
$password = "";    
$dbname = "fruit";   
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";
}

// Create info table
$sql = "CREATE TABLE IF NOT EXISTS info (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'info' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert user data
$users = [
    ['username' => 'user1', 'email' => 'user1@example.com'],
    ['username' => 'user2', 'email' => 'user2@example.com'],
    ['username' => 'user3', 'email' => 'user3@example.com'],
];

foreach ($users as $user) {
    $username = $user['username'];
    $email = $user['email'];

    $insertSql = "INSERT IGNORE INTO info (username, email) VALUES ('$username', '$email')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully for $username<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }
}

// Create unique_fruits table
$sql = "CREATE TABLE IF NOT EXISTS unique_fruits (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    color VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    UNIQUE(name, color, price)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'unique_fruits' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Truncate the unique_fruits table
$truncateSql = "TRUNCATE TABLE unique_fruits";
if ($conn->query($truncateSql) === TRUE) {
    echo "Table 'unique_fruits' truncated successfully.<br>";
} else {
    echo "Error truncating table: " . $conn->error . "<br>";
}

$fruits = [
    ['name' => 'Apple', 'color' => 'red', 'price' => 10.00],
    ['name' => 'Banana', 'color' => 'yellow', 'price' => 5.00],
    ['name' => 'Cherry', 'color' => 'red', 'price' => 10.00],
    ['name' => 'Grape', 'color' => 'purple', 'price' => 8.00],
    ['name' => 'Orange', 'color' => 'orange', 'price' => 6.00],
];

foreach ($fruits as $fruit) {
    $name = $fruit['name'];
    $color = $fruit['color'];
    $price = $fruit['price'];

    $insertSql = "INSERT IGNORE INTO unique_fruits (name, color, price) VALUES ('$name', '$color', $price)";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully for $name<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }
}

$selectAllSql = "SELECT * FROM unique_fruits";
$resultAll = $conn->query($selectAllSql);

echo "<h3>All Fruits:</h3>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Color</th>
<th>Price</th>
</tr>";

if ($resultAll->num_rows > 0) {
    while($row = $resultAll->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["color"] . "</td>
        <td>" . $row["price"] . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No fruits found.</td></tr>";
}

echo "</table>";

$selectRedAndPrice10Sql = "SELECT * FROM unique_fruits WHERE color = 'red' AND price = 10";
$resultRedAndPrice10 = $conn->query($selectRedAndPrice10Sql);

echo "<h3>Fruits that are red and cost 10:</h3>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Color</th>
<th>Price</th>
</tr>";

if ($resultRedAndPrice10->num_rows > 0) {
    while($row = $resultRedAndPrice10->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["color"] . "</td>
        <td>" . $row["price"] . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No fruits found with the specified criteria.</td></tr>";
}

echo "</table>";

$updateFruitId = 1; 
$newFruitName = 'Green Apple';

$updateSql = "UPDATE unique_fruits SET name = '$newFruitName' WHERE id = $updateFruitId";

if ($conn->query($updateSql) === TRUE) {
    echo "Fruit name updated successfully.<br>";
} else {
    echo "Error updating fruit name: " . $conn->error . "<br>";
}


$newquery="Select name 
from unique_fruits
order by price desc
 limit 1";
$result = $conn->query($newquery);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "The fruit with the highest price is: ". $row["name"]."<br>";
    }
}
$sql = "SELECT name, AVG(price) AS avg_price FROM unique_fruits GROUP BY name";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Fruit: " . $row["name"] . " - Average Price: " . number_format($row["avg_price"], 2) . "<br>"; // Adjust to your column names
    }
} else {
    echo "No fruits found.";
}

?>