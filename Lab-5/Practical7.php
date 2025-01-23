<!-- 7.WAP to take two values as an input from the user and display all the prime numbers -->
<!-- between the two given numbers using function. (C) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers Finder</title>
</head>
<body>
    <form method="GET">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" >
        <br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" >
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    function isPrime($n) {
        $count = 0; 
        for ($i = 1; $i <= $n; $i++) { 
            if ($n % $i == 0) {
                $count++; 
            }
        }
        
        return ($count == 2) ? true : false;
    }

    if (isset($_GET["submit"])) {
        $num1 = intval($_GET["num1"]);
        $num2 = intval($_GET["num2"]);


        echo "Prime Numbers between $num1 and $num2 is: ";

        for ($i = $num1; $i <= $num2; $i++) {
            if (isPrime($i)) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>
