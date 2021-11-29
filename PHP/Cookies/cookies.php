<?php
$cookie_name = "contador";
$cookie_value = 1;
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    $contador = $_COOKIE[$cookie_name];
    $contador += 1;
    setcookie($cookie_name, $contador, time() + (86400 * 30), "/");
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> 