<?php
// 6. WAP to print class of result based on percentage (i.e. less than 40% -> Fail, 40% to 50% -> Pass Class,
// 50% to 60% -> Second Class, 60% to 70% -> First Class, above 70% -> Distinction). (C)
    
    $percentage = 75; // Change to test
    if ($percentage < 40) {
        echo "Fail";
    }
    elseif ($percentage >= 40 && $percentage <= 50) {
        echo "Pass Class";
    } 
    elseif ($percentage >50 && $percentage <= 60) {
        echo "Second Class";
    } 
    elseif ($percentage > 60 && $percentage <=70) {
        echo "First Class";
    } 
    else {
        echo "Distinction";
    }
?>