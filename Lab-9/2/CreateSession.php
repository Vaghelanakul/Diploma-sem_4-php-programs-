<?php
    //start the session
    session_start();
?>

<html>
<body>
<?php
    //set session variables
    $_SESSION["Name"]="Darshan";
    $_SESSION["Class"]="Diploma_Sem-4";
    echo "Session variable are set.";
?>
</body>
</html> 