<!-- 4. WAP to generate Fibonacci series of N given number using method. (A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    
    <form method="GET">
        <input type="number" name="val1" placeholder="Enter number of terms" ><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Function to generate Fibonacci series
    function generateFibonacci($n) {
            $x=0;
            $y=1;
            $z=0;
            for($i=0;$i<$n;$i++){
                echo $x." ";
                $z=$x+$y;
                $x=$y;
                $y=$z;
            }
    }

    if(isset($_GET['submit']))
		{
			$n=$_GET['val1'];
			generateFibonacci($n);
		}
    ?>

</body>
</html>
