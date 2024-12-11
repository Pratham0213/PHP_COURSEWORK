<?php

session_start(); 
$_SESSIONID=session_id();
$_SESSION['username'] = 'Pratham Thakur';
$_SESSION['email'] = 'abc@gmail.com';
$_SESSION['password'] = 'FrenchCollectionUnitedKingdom'; 
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

echo "Username: " . $username . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password;

if(session_status() ==PHP_SESSION_NONE){
    session_start();
    echo"A new session has been created " ."<br>";
}else{
    echo"A session is already active";
}


?>