<!-- 3. Write a program to create file named “students.txt” to store names of the students. (A) -->
<?php
$students = ["abc","asdf"];
$file = fopen('students.txt', 'w');
foreach ($students as $student) {
        fwrite($file, $student . "  ");
    }
    fclose($file);
    echo "File 'students.txt' created successfully!";
?>
<!-- 4. Write a program to create file named “students.txt” to read names of the students.(A)   -->
<?php
$file = fopen("students.txt", "a+");
$text = fread($file,filesize("students.txt"));
echo($text);
fclose($file);
?>
