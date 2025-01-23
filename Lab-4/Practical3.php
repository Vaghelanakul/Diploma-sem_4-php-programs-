<!-- 3.WAP to create multidimensional array and print it. (A) -->

<?php 
    $a=array(
        array(1,2,3),
        array(1,2,3),
        array(1,2,3)
    );
    echo "<h1>with for loop</h1><br>";
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo $a[$i][$j];
        }
        echo "<br>";
    }

    echo "<h1>with foreach  loop</h1><br>";
    foreach($a as $key=>$val){
        foreach($val as $val2){
            echo $val2;
        }
        echo "<br/>";
    }

?>