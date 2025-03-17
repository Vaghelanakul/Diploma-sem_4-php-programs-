<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form  method="post">
    Username : <input type="text" name="username" required><br>
    Password : <input type="text" name="password" required><br>
<input type="submit" name="submit">
</form>
<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        setcookie('username', $username, time() + 3600, '/');
        setcookie('password', $password, time() + 3600, '/');
        header('Location: welcome.php');
    
    }
  
?>
</body>
</html>
