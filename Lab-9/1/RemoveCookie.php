<?php
    $cookie_name = "Diploma-4";
    setcookie($cookie_name, "", time() - 3600, "/"); // Set expiration in the past
?>
<html>
<body>
<?php
    echo "Cookie $cookie_name is deleted.";
?>
</body>
</html>
