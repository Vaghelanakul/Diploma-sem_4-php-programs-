<!-- 3. Implement server side validation on student registration form using PHP. (B) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="GET" >
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" ><br><br>

        <button type="submit" name="submit">Register</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $name = trim($_GET['name']);
        $email = trim($_GET['email']);
        $age = intval($_GET['age']);

        $errors = [];

        // Validate Name
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $errors[] = "Invalid name. Only letters and spaces are allowed.";
        }

        // Validate Email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Validate Age
        if ($age < 1 || $age > 100) {
            $errors[] = "Age must be between 1 and 100.";
        }

        if (empty($errors)) {
            echo "<h3>Registration Successful!</h3>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Age: $age</p>";
        } else {
            echo "<h3>Errors:</h3>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }
    ?>

</body>
</html>
