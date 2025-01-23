<!-- 4. WAP to count number of even or odd number from an array of n number. (A)  -->

<?php
    $arr=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    $even_count=0;
    $odd_count=0;
    foreach ($arr as $num) {
            if ($num % 2 == 0) {
                $even_count++;
            } 
            else {
                $odd_count++;
            }
    }

echo "Even numbers count: $even_count <br>";
echo "Odd numbers count: $odd_count";

?>