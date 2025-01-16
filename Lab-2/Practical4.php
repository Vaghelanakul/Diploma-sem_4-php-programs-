<?php
    
    //WAP to nd greatest number from 3 numbers. (B)

    $num1 = 12; 
    $num2 = 25; 
    $num3 = 10; 

    if( $num1 > $num2 ) {
        if($num1>$num3){
            echo "$num1 is max";
        }
        else{
            echo "$num3 is max";
        }
    }
    else{
        if($num2>$num3){
            echo "$num2 is max";
        }
        else{
            echo "$num3 is max";
        }
    }
    

    // if ($num1 >= $num2 && $num1 >= $num3) {
    //     echo "$num1 is max";
    // } 
    // elseif ($num2 >= $num1 && $num2 >= $num3) {
    //    echo "$num2 is max";
    // } 
    // else {
    //     echo "$num3 is max";
    // }

    
?>
