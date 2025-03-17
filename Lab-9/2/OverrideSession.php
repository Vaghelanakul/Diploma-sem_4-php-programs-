<?php
    session_start();
?>
<html>
<body>
<?php
    $_SESSION["Name"]="abcd";
    echo "Session variable are modified";
    $_SESSION["Subject"]="PHP";
?>
</body>
</html>