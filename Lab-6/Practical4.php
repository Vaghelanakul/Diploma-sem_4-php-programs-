<!-- 4. WAP to calculate factorial of a number using recursion. (B) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="GET">
        <input type="number" name="num" placeholder="Enter a number" ><br>
        <button type="submit" name="submit">Calculate Factorial</button>
    </form>

    <?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        }
        return $n * factorial($n - 1);        
    }
    if (isset($_GET['submit'])) {
        $num = intval($_GET['num']);
        $factorial = factorial($num);
        echo "The factorial of $num is: $factorial";
    }
    ?>
</body>
</html>
