<!-- 1. WAP to create numeric array and print it. (A) -->
<?php
    $a=array(1,2,3,4,5,6);
    echo "<h1>with for loop</h1><br>";
    for ($i=0; $i <count($a) ; $i++) { 
        echo $a[$i]."</br>";
    }
    echo "<h1>with foreach loop</h1><br>";
    foreach($a as $value){
        echo $value."<br>";
    }

?>