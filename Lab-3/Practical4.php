<!-- 4.Write a program to calculate electricity bill using control structure. 
For first 50 units – Rs. 3.50/unit For next 100 units – Rs. 4.00/unit For next 100 units 
– Rs. 5.20/unit For units above 250 – Rs. 6.50/unit (B) -->

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <form method="get">
        Units: <input type="number" name="unit" ><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $units = $_GET['unit'];
        $bill = 0;

        if ($units <= 50) {
            $bill = $units * 3.50;
        } 
        elseif ($units <= 150) {
            $bill = (50 * 3.50) + (($units - 50) * 4.00);
        } 
        elseif ($units <= 250) {
            $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
        } 
        else {
            $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
        }

        echo "Your electricity bill is: Rs. $bill";
    }
    ?>
</body>
</html>
