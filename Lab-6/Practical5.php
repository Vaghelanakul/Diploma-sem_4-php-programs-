<!-- 5. WAP to check whether the number is prime or not using recursion. (C) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="GET">
        <input type="number" name="num1" placeholder="Enter a number"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    function check($n, $i = null) {
        if ($n <= 1) {
            return 0; 
        }
        if ($i === null) {
            $i = $n - 1; 
        }
        if ($i == 1) {
            return 1; 
        }
        if ($n % $i == 0) {
            return 0; 
        }
        return check($n, $i - 1); 
    }

    // Handle form submission
    if (isset($_GET['submit'])) {
        $n = intval($_GET['num1']); 
        $isPrime = check($n);

        if ($isPrime) {
            echo "$n is a Prime Number";
        } else {
            echo "$n is Not a Prime Number";
        }
    }
    ?>

</body>
</html>
