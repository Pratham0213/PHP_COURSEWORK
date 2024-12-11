//write down the code for login session in PHP
<?php
session_start();
$valid_username='Pratham';
$valid_password='Pablo_13';

if($SERVER['REQUEST_METHOD']==='POST'){
    if($username==$valid_username && $password==$valid_password){
        echo"userName:".$username. "<br>"; 
    } else if (empty($username) || $username != $valid_username || $password != $valid_password) {
        echo "Invalid Credentials";
        exit();
    }else{
        echo "Error Occurred";
        exit();
    }
}

?>