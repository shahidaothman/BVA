<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = uniqid();
setcookie($cookie_name, $cookie_value, time() + (10), "/"); // 86400 = 1 day
?>
<html>
<<<<<<< HEAD

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

=======
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
>>>>>>> 2ad4855a90a2101960c10ab5ac26d7503969663b
</html>