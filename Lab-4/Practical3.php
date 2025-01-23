<!-- 3.WAP to create multidimensional array and print it. (A) -->

<?php 
    $a=array(
        array(1,2,3),
        array(1,2,3),
        array(1,2,3)
    );
    
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo $a[$i][$j];
        }
        echo "<br>";
    }

?>