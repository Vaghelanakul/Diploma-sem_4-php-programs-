<!-- 3. WAP to calculate simple interest using method. (A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="GET">
        <input type="number" name="principal_amount" placeholder="Principal Amount" ><br>
        <input type="number" name="rate" placeholder="Rate of Interest" ><br>
        <input type="number" name="year" placeholder="number of years" ><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Function to calculate Simple Interest
    function calculateSI($principal, $rate, $time) {
        return ($principal * $rate * $time) / 100;
    }

    if (isset($_GET['submit'])) {
        $principal = $_GET['principal_amount'];
        $rate = $_GET['rate'];
        $time = $_GET['year'];

        $interest = calculateSI($principal, $rate, $time);
        echo "The Simple Interest is: $interest";
    }
    ?>

</body>
</html>
