<!-- 4. Write a program to create file named “students.txt” to read names of the students.(A)   -->

<?php
$file = fopen("students.txt", "a+");
$text = fread($file,filesize("students.txt"));
echo($text);
fclose($file);
?>
