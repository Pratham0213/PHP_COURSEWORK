<?php
$cookie_name = "Pablo_31";
$cookie_value = "null";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<!--setcookie(name, value, expire, path, domain, secure, httponly); trim stripslashes,htmlspecialchars-->
</body>
</html>