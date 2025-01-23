<!-- 2. WAP to find a diameter from given area of circle. (A) -->

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="get">
        Enter area: <input type="number" name="area">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $area = $_GET['area'];
        $radius = sqrt($area / pi()); 
        $diameter = 2 * $radius; 
        echo "The diameter of the circle is: $diameter";
    }
    ?>
</body>
</html>
