<!-- 1. WAP to demonstrate server side validation for name, email, mobile number. (A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="GET">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="mobile">Mobile:</label><br>
        <input type="text" id="mobile" name="mobile" ><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $name = trim($_GET['name']);
        $email = trim($_GET['email']);
        $mobile = trim($_GET['mobile']);

        $errors = [];

        // Validate Name
        if (!preg_match("/^[a-zA-Z ]$/", $name)) {
            $errors[] = "Invalid name. Only letters and spaces are allowed.";
        }

        // Validate Email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Validate Mobile
        if (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $errors[] = "Invalid mobile number. It should be 10 digits.";
        }

        if (empty($errors)) {
            echo "<p style='color: green;'>Validation Successful!</p>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Mobile: $mobile</p>";
        } else {
            echo "<p style='color: red;'>Validation Errors:</p>";
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
