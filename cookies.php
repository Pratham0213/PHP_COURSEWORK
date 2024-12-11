
<?php


setcookie("username", "Pablo13", time() + (1*86400 * 30),
    "/"); 
    
?>

<html>
<body>
<?php

$username = $_COOKIE["username"];
if ($username != "") {
    echo "Welcome " . $username . "!<br>";
} else {
    echo "Cookie named 'username' is not set!<br>";
    echo "Please log in first to see this message.";
    exit();
}
?>
</body>
</html>


