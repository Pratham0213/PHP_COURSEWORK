<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tavble";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "CREATE DATABASE myDB if not exists";

if($conn->query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: ". $conn->error;
}

$conn->close();

// Connect to the newly created database

$conn=new mysqli($servername,$username,$password,"myDB");

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "CREATE TABLE Student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
if($conn->query($sql) === TRUE){
    echo "Table students created successfully";
} else {
    echo "Error creating table: ". $conn->error;
}

$conn->close();

// Insert data into the table

$conn=new mysqli($servername,$username,$password,"");

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO students (firstname, lastname, email)
VALUES ('John', 'Doe', 'johndoe@example.com')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();

// Retrieve data from the table

$conn=new mysqli($servername,$username,$password,"");

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row
        ["email"]."</td></tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
        
$conn->close();




?>