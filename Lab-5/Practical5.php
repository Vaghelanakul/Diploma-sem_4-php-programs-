<!-- 5. WAP to nd maximum number from given three numbers using method. (A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="GET">
        <input type="number" name="num1" placeholder="Enter first number" ><br>
        <input type="number" name="num2" placeholder="Enter second number" ><br>
        <input type="number" name="num3" placeholder="Enter third number" ><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    function findMax($a, $b, $c) {
        if( $a > $b ) {
            if($a>$c){
                echo "$a is max";
            }
            else{
                echo "$c is max";
            }
        }
        else{
            if($b>$c){
                echo "$b is max";
            }
            else{
                echo "$c is max";
            }
        }
    }

    if (isset(($_GET['submit']))) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];

        findMax($num1, $num2, $num3);
        
    }
    ?>

</body>
</html>
