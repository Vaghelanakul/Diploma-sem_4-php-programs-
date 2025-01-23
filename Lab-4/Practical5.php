<!-- 5. WAP to create user define function for adding two numbers and display the result.  -->
<!-- (A)   -->

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="get">
        Number 1: <input type="number" name="num1" ><br>
        Number 2: <input type="number" name="num2" ><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        function add($a, $b) {
            return $a + $b;
        }

        $result = add($num1, $num2);
        echo "The sum of $num1 and $num2 is: $result";
    }
    ?>
</body>
</html>
