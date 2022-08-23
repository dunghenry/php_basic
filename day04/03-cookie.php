<?php
// setcookie(name, value, expire, path, domain, secure, httponly);
    $cookie_name = "user";
    $cookie_value = "Tran Dung";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    //delete cookie: setcookie("user", "", time() - 3600);

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

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>