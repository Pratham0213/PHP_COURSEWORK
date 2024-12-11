<?php
if($_server["REQUEST_METHID"]=="POST"){
    if(empty($_POST["price"])){
        $priceErr="price is required";
    }else{
        $price=test_input($_POST["price"]);
        if(!is_numeric($price)||$price=0){
            $priceErr="price must be a positive number";
    
    }
}
}

if(empty($nameErr)&&empty($priceErr)){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    
    $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
    
    $conn->close();
    }

?>