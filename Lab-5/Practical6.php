<!-- WAP  to  accept  a  number  and  check  whether  the  number  is  prime  or  not.  Use  -->
<!-- method name check (int n). The method returns 1, if the number is prime otherwise,  -->
<!-- it returns 0. (B)  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form method="GET">
        <input type="number" name="num1" placeholder="Enter a number" ><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    
    function check($n) {
        $count = 0; 
        if ($n <= 1) {
            return 0;
        }
        for ($i = 1; $i <= $n; $i++) { 
            if ($n % $i == 0) {
                $count++; 
            }
        }
        
        return ($count == 2) ? 1 : 0;
    }

    
    if (isset($_GET['submit'])) {
        $n = intval($_GET['num1']); 
        $isPrime = check($n);

    echo $isPrime;        

    }
    ?>

</body>
</html>
