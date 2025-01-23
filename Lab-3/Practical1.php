<!-- 1. WAP to take a value from user from 1-7 and display current day using switch case.  -->
<!-- (If 1-Monday, 2-Tuesday, etc....) (A) -->
<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <form method="get">
        Enter a number from 1 to 7: <input type="number" name="day" >
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $day = $_GET['day'];
        switch ($day) {
            case 1: echo "Monday"; break;
            case 2: echo "Tuesday"; break;
            case 3: echo "Wednesday"; break;
            case 4: echo "Thursday"; break;
            case 5: echo "Friday"; break;
            case 6: echo "Saturday"; break;
            case 7: echo "Sunday"; break;
            default: echo "Invalid input! Please enter a number between 1 and 7."; break;
        }
    }
    ?>
</body>
</html>
