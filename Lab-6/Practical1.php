<!-- 1. WAP to calculate sum of first n numbers using recursion. (A) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <form method="GET">
        <input type="number" name="num" placeholder="Enter a number"><br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    function sum_of_numbers($n)
    {
        if ($n == 0) {
            return 0;
        }
        return $n + sum_of_numbers($n - 1);
    }
    if (isset($_GET['submit'])) {
        $num = $_GET['num'];
        $sum = sum_of_numbers($num);
        echo "The sum of the first $num numbers is: $sum";
    }
    ?>

</body>

</html>