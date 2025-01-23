<!-- 1. WAP  to  create  user  define  function  for  print  your  name  and  call  it  using  all  user 
defined functions. (A)   -->

<?php
function printName() {
    return "My name is :Nakul";
}


function callFunction() {
    $name= printName();
    echo $name;
}


callFunction();

?>
