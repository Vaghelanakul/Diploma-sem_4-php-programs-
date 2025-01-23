<!-- 6. WAP to accept n numbers in an array. Display the sum of all the numbers which are 
divisible by either 3 or 5. (B) -->

<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $sum = 0;

    for ($i = 0; $i < 10; $i++) {
        if ($arr[$i] % 3 == 0 || $arr[$i] % 5 == 0) {
            $sum += $arr[$i];
        }
    }
    echo "sum is:$sum";  
?>
