<!-- 2. Design  a  student  registration  form  and  retrieve  data  in  controller  page  using  -->
<!-- following Method: GET, POST, and REQUEST. (B) -->


<!-- using get-method -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="GET" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" ><br><br>

        <button type="submit" name="submit">Register</button>
    </form>

    <?php
    // if (isset($_GET['submit'])) {
    //     $name = $_GET['name'];
    //     $email = $_GET['email'];
    //     $age = intval($_GET['age']);

    //     echo "<h3>Submitted Data:</h3>";
    //     echo "<p>Name: $name</p>";
    //     echo "<p>Email: $email</p>";
    //     echo "<p>Age: $age</p>";
    // }
    ?>

</body>
</html> -->



<!-- post method -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    
    <form method="POST" >
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" ><br><br>

        <button type="submit" name="submit">Register</button>
    </form>

     <?php
    // if (isset($_POST['submit'])) {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $age = $_POST['age'];

    //     echo "<h3>Submitted Data:</h3>";
    //     echo "<p>Name: $name</p>";
    //     echo "<p>Email: $email</p>";
    //     echo "<p>Age: $age</p>";
    // }
    ?> -->

</body>
</html>

request Method

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    
    <form method="POST" >
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" ><br><br>

        <button type="submit" name="submit">Register</button>
    </form>

    <?php
    if (isset($_REQUEST['submit'])) {
        $name = $_REQUEST['name'];
        $email =$_REQUEST['email'];
        $age = $_REQUEST['age'];

        echo "<h3>Submitted Data:</h3>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Age: $age</p>";
    }
    ?>

</body>
</html>

